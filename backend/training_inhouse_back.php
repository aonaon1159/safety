<?php include('header_back.php'); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-calendar-alt"></i> จัดการหลักสูตร In-House</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Training In-House</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_training" data-title='เพิ่ม Training'>เพิ่ม</button>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_training_inhouse'
                                type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_training">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ประเภทหลักสูตร</th>
                                        <th>ชื่อหลักสูตร</th>
                                        <th>รายละเอียด</th>
                                        <th>สถานะ</th>
                                        <th class="w-25">รูปปกหลักสูตร</th>
                                        <th>Alt รูปปกหลักสูตร</th>
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

<form method="post" id="form_training" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_training">
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
                                <label>ประเภทภาษาหลักสูตร</label><br>
                                <select class="form-control required" id="type_training" name="type_training">
                                    <option value="" disabled selected>
                                        เลือกประเภท
                                    </option>
                                    <option value="TH">
                                        หลักสูตรภาษาไทย
                                    </option>
                                    <option value="ENG">
                                        หลักสูตรภาษาอังกฤษ
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ชื่อหลักสูตร (ที่ใช้แสดง)</label>
                                <input class="form-control required" id="topic_training" name="topic_training"
                                    type="text" placeholder="หลักสูตร">
                            </div>
                            <div class="form-group">
                                <label>รายละเอียดหลักสูตร</label>
                                <textarea name="detail_training" id="detail_training" cols="10" rows="6"
                                    class="form-control required" maxlength="255" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>เลือกหน้าปก</label>
                                <input class="form-control" id="cover_img" name="cover_img" type="file">
                            </div>
                            <div class="form-group">
                                <label>Alt รูปหน้าปก</label>
                                <input class="form-control" id="alt" name="alt" type="text"
                                    placeholder="คำอธิบายรูปภาพ">
                            </div>
                            <div class="form-group">
                                <label>เลือกรายละเอียดหลักสูตร (PDF)</label>
                                <input class="form-control" id="path_pdf" name="path_pdf" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_training_inhouse" name="id_training_inhouse">
                    <button class="btn btn-primary" type="button" id="submit_training">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
tb_training = $('#tb_training').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_training_inhouse', data.id_training_inhouse);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_training_inhouse",
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
            data: "type_training"
        },
        {
            data: "topic_training"
        },
        {
            data: "detail_training"
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_training_inhouse + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: "cover_img",
            render: function(data) {
                return '<a target="_blank" href="' + data +
                    '"><img class="rounded" src="<?php echo $base_url;?>' +
                    data + '" alt=""></a>';
            }
        },
        {
            data: "alt"
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a target='_blank' href='" +
                    row.path_pdf +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_training_inhouse mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_training' data-title='แก้ไข Menu' data-id='" +
                    row.id_training_inhouse +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_training mx-1 mb-2' type='button' data-id='" +
                    row.id_training_inhouse +
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
        modal.find("select").val("");
        modal.find("textarea").val("");
        modal.find('.modal-title').text(title);
    }
});

$('#submit_training').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_training_inhouse").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#cover_img").removeClass("required");
        $("#path_pdf").removeClass("required");
    } else {
        $("#cover_img").addClass("required");
        $("#path_pdf").addClass("required");
    }

    if (check_form_empty($(
            "#form_training input.required,#form_training textarea.required,#form_training select.required"
        ))) { // เช็คกรอกข้อมูลครบหรือไม่

        $.ajax({ //เพิ่ม,แก้ไข หลักสูตร
            url: "act_manage.php?action=manage_training_inhouse",
            type: "POST",
            data: new FormData($('#form_training')[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('html').css('cursor', 'wait');
                $("#m_training input").attr('disabled', true);
                $('#m_training select').attr('disabled', true);
                $('#m_training button').attr('disabled', true);
            },
            success: function(result) {
                if (result == 1) {
                    $('html').css('cursor', 'default');
                    $("#m_training input").attr('disabled', false);
                    $('#m_training select').attr('disabled', false);
                    $('#m_training button').attr('disabled', false);

                    $('#m_training').modal('hide');
                    notify_success();
                    tb_training.ajax.reload(null, false);
                } else {
                    notify_fail();
                    $('#m_training').modal('hide');
                }
            }
        });
    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_training tbody').on('click', ".edit_training_inhouse", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_training_inhouse",
        data: {
            id_training_inhouse: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);

            $("#m_training #type_training").val(Data[0].type_training);
            $("#m_training #id_training_inhouse").val(Data[0].id_training_inhouse);
            $("#m_training #detail_training").val(Data[0].detail_training);
            $("#m_training #alt").val(Data[0].alt);
            $("#m_training #path_pdf").val(Data[0].path_pdf);
            $("#m_training #topic_training").val(Data[0].topic_training);
        }
    });
}));

$('#tb_training tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_training_inhouse",
        data: {
            id_training_inhouse: $(this).data('id'),
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

$('#tb_training tbody').on('click', ".del_training", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_training_inhouse",
            data: {
                id_training_inhouse: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_training.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));

$('.sort_training_inhouse').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {
        $.each(tb_training.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_training_inhouse",
                data: {
                    id_training_inhouse: value["id_training_inhouse"],
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