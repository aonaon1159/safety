<?php include('header_back.php'); ?>
<style>
.img_fix_width {
    width: calc(10vh + 30px);
}
</style>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> จัดการโปรโมชัน</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Promotion</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_promotion" data-title='เพิ่ม Promotion'>เพิ่ม</button>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_promotion' type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_promotion">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>ระยะเวลาใช้งาน</th>
                                        <th>รูป</th>
                                        <th>Alt รูป</th>
                                        <th>ลิงก์</th>
                                        <th>สถานะ</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<form method="post" id="form_promotion" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_promotion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>ชื่อรูปภาพ</label>
                                <input class="form-control required" id="name" name="name" type="text"
                                    placeholder="ชื่อรูปภาพ">
                            </div>
                            <div class="form-group">
                                <label>Alt รูปภาพ</label>
                                <input class="form-control" id="alt" name="alt" type="text"
                                    placeholder="คำอธิบายรูปภาพ">
                            </div>
                            <div class="form-group">
                                <label>ลิงก์</label>
                                <input class="form-control required" id="url" name="url" type="text"
                                    placeholder="ลิงก์">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>ตั้งแต่วันที่</label>
                                        <input type="date" class="form-control required" id="startDate" name="startDate"
                                            onchange="changeMinDate()">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>ถึงวันที่</label>
                                        <input type="date" class="form-control required" id="endDate" name="endDate">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>เลือกไฟล์</label>
                                <input class="form-control" id="imgPromotion" name="imgPromotion" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_promotion" name="id_promotion">
                    <button class="btn btn-primary" type="button" id="submit_promotion">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
tb_promotion = $('#tb_promotion').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_promotion', data.id_promotion);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_promotion",
        "method": 'POST',
        "dataSrc": ""
    },
    "rowReorder": {
        dataSrc: 'sequence'
    },
    "columns": [{
            data: "sequence",
        },
        {
            data: "name"
        },
        {
            data: null,
            render: function(row) {
                return DateThai(row.startDate) + ' - ' + DateThai(row.endDate);
            },
        },
        {
            className: 'text-center',
            data: "path",
            render: function(data) {
                return '<a target="_blank" href="' + data +
                    '"><img class="rounded img_fix_width" src="<?php echo $base_url;?>' +
                    data + '"></a>';
            }
        },
        {
            data: "alt"
        },
        {
            className: 'text-center',
            data: "url",
            render: function(data) {
                return '<a target="_blank" href="' +
                    data +
                    '"><button class="btn btn-outline-secondary" type="button">ดู</button></a>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_promotion + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: "id_promotion",
            render: function(data) {
                return "<button class='btn btn-outline-warning edit_promotion mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_promotion' data-title='แก้ไข Promotion' data-id='" +
                    data +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_promotion mx-1 mb-2' type='button' data-id='" +
                    data +
                    "'>ลบ</button>";
            }
        }
    ],
    "columnDefs": [{
        "className": "grabbable",
        "targets": 0
    }]
});

$('.modal').on('show.bs.modal', function(event) { // ทำการเปลี่ยน title และลบข้อมูลทั้งหมดใน input
    var button = $(event.relatedTarget); // Button that triggered the modal 
    var modal = $(this);
    var title = button.data('title');
    if (title != modal.find('.modal-title').text()) {
        modal.find("input").val("");
        modal.find('.modal-title').text(title);
    }
});

function changeMinDate() { // ตั้งให้ไม่สามารถเลือกวันหลังน้อยกว่าวันเริ่ม
    document.getElementById("endDate").min = document.getElementById("startDate").value;
}

$('#submit_promotion').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_promotion").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#imgPromotion").removeClass("required");
    } else {
        $("#imgPromotion").addClass("required");
    }
    if (check_form_empty($("#form_promotion input.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
        $('#m_promotion').modal('hide');
        $.ajax({
            url: "act_manage.php?action=manage_promotion",
            type: "POST",
            data: new FormData($('#form_promotion')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_promotion.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_promotion tbody').on('click', ".edit_promotion", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_promotion",
        data: {
            id_promotion: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);
            $("#m_promotion #id_promotion").val(Data[0].id_promotion);
            $("#m_promotion #name").val(Data[0].name);
            $("#m_promotion #url").val(Data[0].url);
            $("#m_promotion #alt").val(Data[0].alt);
            $("#m_promotion #startDate").val(Data[0].startDate);
            $("#m_promotion #endDate").val(Data[0].endDate);
        }
    });
}));

$('#tb_promotion tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_promotion",
        data: {
            id_promotion: $(this).data('id'),
            status: $(this).prop("checked")
        },
        success: function(result) {
            if (result == 1) {
                notify_success();
            } else {
                notify_fail();
            }
        }
    });
}));

$('#tb_promotion tbody').on('click', ".del_promotion", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_promotion",
            data: {
                id_promotion: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_promotion.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));

$('.sort_promotion').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {
        $.each(tb_promotion.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_promotion",
                data: {
                    id_promotion: value["id_promotion"],
                    sequence: (key + 1)
                },
                success: function(result) {
                    if (result == 1) {} else {
                        error = 1;
                        notify_fail();
                    }
                }
            });
        });

        if (!error) notify_success();
    }
}));
</script>