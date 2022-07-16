<?php include('header_back.php'); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-calendar-alt"></i> จัดการเมนูหลักสูตรอบรม</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Menu Training</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_menu" data-title='เพิ่ม Menu'>เพิ่ม</button>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_menu_training' type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_training">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อเมนู</th>
                                        <th>Keyword</th>
                                        <th>Description</th>
                                        <th>สถานะ</th>
                                        <th class="w-25">รูป Banner</th>
                                        <th>Alt Banner</th>
                                        <th>ลิงก์สั้น</th>
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

<form method="post" id="form_menu" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_menu">
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
                                <label>ชื่อเมนู</label>
                                <input class="form-control required" id="name_menu" name="name_menu" type="text"
                                    placeholder="ชื่อเมนู">
                            </div>
                            <div class="form-group">
                                <label>Keyword หน้าเว็ป</label>
                                <input class="form-control" id="meta_keyword" name="meta_keyword" type="text"
                                    placeholder="keyword">
                            </div>
                            <div class="form-group">
                                <label>Description หน้าเว็ป</label>
                                <input class="form-control" id="meta_description" name="meta_description" type="text"
                                    placeholder="description">
                            </div>
                            <div class="form-group">
                                <label>ลิงก์</label>
                                <input class="form-control required" id="url_page" name="url_page" type="text"
                                    placeholder="ลิงก์">
                            </div>
                            <div class="form-group">
                                <label>เลือก Banner</label>
                                <input class="form-control" id="path_banner" name="path_banner" type="file">
                            </div>
                            <div class="form-group">
                                <label>Alt Banner</label>
                                <input class="form-control" id="alt" name="alt" type="text"
                                    placeholder="คำอธิบายรูปภาพ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_menu_training" name="id_menu_training">
                    <button class="btn btn-primary" type="button" id="submit_menu">บันทึก</button>
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
        $(row).attr('data-id_menu_training', data.id_menu_training);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_menu_training",
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
            data: "name_menu"
        },
        {
            data: "meta_keyword"
        },
        {
            data: "meta_description"
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_menu_training + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: "path_banner",
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
                return "<a href='" + row.shortlink +
                    "'><span id='shortlink_" +
                    row.id_menu_training + "'>" +
                    row.shortlink +
                    "</span></a><button class='btn btn-outline-secondary mx-1 mb-2' type='button' " +
                    (row.shortlink || "disabled") +
                    " onclick=copyToClipboard('#shortlink_" +
                    row.id_menu_training + "')>คัดลอก</button>";
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a target='_blank' href='" +
                    row.url_page +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_menu mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_menu' data-title='แก้ไข Menu' data-id='" +
                    row.id_menu_training +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_menu mx-1 mb-2' type='button' data-id='" +
                    row.id_menu_training +
                    "'>ลบ</button>";
            }
        }
    ],
    "initComplete": function(settings, json) {
        $('#tb_training').DataTable().page('last').draw('page'); //เปิดหน้าสุดท้ายเมื่อสร้างตารางเสร็จ
    }
});

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
    notify_success("คักลอกข้อมูลลิ้งก์สำเร็จ");
}

$('.modal').on('show.bs.modal', function(event) { // ทำการเปลี่ยน title และลบข้อมูลทั้งหมดใน input
    var button = $(event.relatedTarget); // Button that triggered the modal 
    var modal = $(this);
    var title = button.data('title');
    if (title != modal.find('.modal-title').text()) {
        modal.find("input").val("");
        modal.find('.modal-title').text(title);
    }
});

$('#submit_menu').on('click', (function(e) {
    e.preventDefault();
    if (check_form_empty($("#form_menu input.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
        $('#m_menu').modal('hide');

        $.ajax({ //เพิ่ม,แก้ไข เมนู
            url: "act_manage.php?action=manage_menu_training",
            type: "POST",
            data: new FormData($('#form_menu')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_training.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });

    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_training tbody').on('click', ".edit_menu", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_menu_training",
        data: {
            id_menu_training: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);

            $("#m_menu #id_menu_training").val(Data[0].id_menu_training);
            $("#m_menu #name_menu").val(Data[0].name_menu);
            $("#m_menu #meta_keyword").val(Data[0].meta_keyword);
            $("#m_menu #meta_description").val(Data[0].meta_description);
            $("#m_menu #url_page").val(Data[0].url_page);
            $("#m_menu #alt").val(Data[0].alt);
        }
    });
}));

$('#tb_training tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_menu_training",
        data: {
            id_menu_training: $(this).data('id'),
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

$('#tb_training tbody').on('click', ".del_menu", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_menu_training",
            data: {
                id_menu_training: $(this).data('id')
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

$('.sort_menu_training').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {
        $.each(tb_training.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_menu_training",
                data: {
                    id_menu_training: value["id_menu_training"],
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