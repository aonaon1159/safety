<?php include('header_back.php'); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-home"></i> จัดการตำแหน่งงานที่รับสมัคร</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Job</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_job" data-title='เพิ่ม Job'>เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_job">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>คำอธิบาย</th>
                                        <th>Alt หน้าปก</th>
                                        <th class="w-25">รูป หน้าปก</th>
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

<form method="post" id="form_job" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_job">
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
                                <label>ชื่อตำแหน่ง</label>
                                <input class="form-control required" id="name" name="name" type="text"
                                    placeholder="ชื่อตำแหน่ง">
                            </div>
                            <div class="form-group">
                                <label>คำอธิบายตำแหน่งงาน</label>
                                <textarea class="form-control required" id="description" name="description" rows="5"
                                    placeholder="คำอธิบายตำแหน่งงาน"></textarea>
                            </div>
                            <div class="form-group">
                                <label>เลือก รูปปก</label>
                                <input class="form-control" id="imgJob" name="imgJob" type="file">
                            </div>
                            <div class="form-group">
                                <label>Alt รูปปก</label>
                                <input class="form-control" id="alt" name="alt" type="text"
                                    placeholder="คำอธิบายรูปภาพ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_job" name="id_job">
                    <button class="btn btn-primary" type="button" id="submit_job">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
tb_job = $('#tb_job').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_job', data.id_job);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_job",
        "method": 'POST',
        "dataSrc": ""
    },
    "columns": [{
            data: null,
            render: function(data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }
        },
        {
            data: "name"
        },
        {
            data: "description"
        },
        {
            data: "alt"
        },
        {
            className: 'text-center',
            data: "path",
            render: function(data) {
                return '<a target="_blank" href="' + data +
                    '"><img class="rounded" src="<?php echo $base_url;?>' +
                    data + '"></a>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_job + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: "id_job",
            render: function(data) {
                return "<button class='btn btn-outline-warning edit_job mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_job' data-title='แก้ไข Job' data-id='" +
                    data +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_job mx-1 mb-2' type='button' data-id='" +
                    data +
                    "'>ลบ</button>";
            }
        }
    ]
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

$('#submit_job').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_job").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#imgJob").removeClass("required");
    } else {
        $("#imgJob").addClass("required");
    }
    if (check_form_empty($(
            "#form_job input.required,#form_gallery textarea.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
        $('#m_job').modal('hide');
        $.ajax({
            url: "act_manage.php?action=manage_job",
            type: "POST",
            data: new FormData($('#form_job')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_job.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_job tbody').on('click', ".edit_job", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_job",
        data: {
            id_job: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);
            $("#m_job #id_job").val(Data[0].id_job);
            $("#m_job #name").val(Data[0].name);
            $("#m_job #description").val(Data[0].description);
            $("#m_job #alt").val(Data[0].alt);
        }
    });
}));

$('#tb_job tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_job",
        data: {
            id_job: $(this).data('id'),
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

$('#tb_job tbody').on('click', ".del_job", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_job",
            data: {
                id_job: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_job.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));
</script>