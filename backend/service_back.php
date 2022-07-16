<?php include('header_back.php'); ?>
<style>
.label {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out,
        border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-clipboard-list"></i> จัดการเมนูบริการ</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Service</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_service" data-title='เพิ่ม Service'>เพิ่ม
                        </button>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_service' type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_service">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อเมนู</th>
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

<form method="post" id="form_service" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_service">
        <div class="modal-dialog modal-lg">
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
                                <label>ชื่อเมนู</label>
                                <input class="form-control required" id="name" name="name" type="text"
                                    placeholder="ชื่อเมนู">
                            </div>
                            <div class="form-group">
                                <label>เนื้อหา</label>
                                <textarea class="required" id="summernote" name="content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_service" name="id_service">
                    <button class="btn btn-primary" type="button" id="submit_service">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include('footer_back.php'); ?>
<script type="text/javascript">
$('#summernote').summernote({
    placeholder: 'รายละเอียดบริการ',
    height: ($(window).height() - 300)
});

tb_service = $('#tb_service').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_service', data.id_service);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_service",
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
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_service + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: "id_service",
            render: function(data) {
                return "<a target='_blank' href='<?php echo dirname(dirname($_SERVER['PHP_SELF'])); ?>/service?service=" +
                    data +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_service mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_service' data-title='แก้ไข Service' data-id='" +
                    data +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_service mx-1 mb-2' type='button' data-id='" +
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

$('#m_service').on('show.bs.modal', function(event) { // ทำการเปลี่ยน title และลบข้อมูลทั้งหมดใน input
    var modal = $(this);
    if (!(modal.data('bs.modal') || {})._isShown) {
        var button = $(event.relatedTarget); // Button that triggered the modal 
        var title = button.data('title');
        if (title != (modal.find('.modal-title').first()).text()) {
            modal.find("input").val("");
            modal.find('.modal-title').text(title);
            $("#m_service #summernote").summernote("code", "");
        }
    }
});

$('#submit_service').on('click', (function(e) {
    e.preventDefault();
    if (check_form_empty($("#form_service input.required")) && check_form_empty($(
            "#form_service textarea.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
        $('#m_service').modal('hide');
        $.ajax({
            url: "act_manage.php?action=manage_service",
            type: "POST",
            data: new FormData($('#form_service')[0]),
            cache: false,
            async: false,
            contentType: false,
            processData: false,
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_service.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_service tbody').on('click', ".edit_service", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_service",
        data: {
            id_service: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);

            $("#m_service #id_service").val(Data[0].id_service);
            $("#m_service #name").val(Data[0].name);
            $("#m_service #summernote").summernote("code", Data[0].content);
        }
    });
}));

$('#tb_service tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_service",
        data: {
            id_service: $(this).data('id'),
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

$('#tb_service tbody').on('click', ".del_service", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_service",
            data: {
                id_service: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_service.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));

$('.sort_service').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {
        $.each(tb_service.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_service",
                data: {
                    id_article: value["id_service"],
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