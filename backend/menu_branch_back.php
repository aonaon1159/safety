<?php include('header_back.php'); ?>
<?php include('../dbconnect_booking.php');?>

<?php
    //เปิด select branch
    $stmt = $bookingDb->prepare('SELECT id_branch,namebranch FROM branch ORDER BY namebranch');
    $stmt->execute();
    $branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //ปิด select branch
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-calendar-alt"></i> จัดการเมนูหลักสูตรจป</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Menu Branch</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_menu" data-title='เพิ่ม Menu'>เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_menu">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>เขตพื้นที่</th>
                                        <th>Keyword</th>
                                        <th>Description</th>
                                        <th>สถานะจปหัวหน้างาน</th>
                                        <th>สถานะจปบริหาร</th>
                                        <th>สถานะจปเทคนิค</th>
                                        <th>สถานะคปอ</th>
                                        <th>สถานะ</th>
                                        <th class="w-25">รูป Banner</th>
                                        <th>Alt Banner</th>
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
                                <label>เขตพื้นที่</label><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control required" id="sl_branch" name="sl_branch">
                                            <option>
                                            </option>

                                            <?php foreach($branch as $value){?>
                                            <option value="<?php echo $value['id_branch'];?>">
                                                <?php echo $value['namebranch'];?>
                                            </option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
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
                    <input type="hidden" id="id_menu_branch" name="id_menu_branch">
                    <button class="btn btn-primary" type="button" id="submit_menu">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
$('#sl_branch').select2({
    allowClear: true,
    placeholder: "เลือกเขตพื้นที่"
});

tb_menu = $('#tb_menu').DataTable({
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_menu_branch",
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
            data: "namebranch"
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
                status = (row.status_jorpor_h == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-type="_jorpor_h" data-id="' +
                    row.id_menu_branch + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status_jorpor_m == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-type="_jorpor_m" data-id="' +
                    row.id_menu_branch + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status_jorpor_s == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-type="_jorpor_s" data-id="' +
                    row.id_menu_branch + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status_korporor == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-type="_korporor" data-id="' +
                    row.id_menu_branch + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-type="none" data-id="' +
                    row.id_menu_branch + '" ' +
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
                return "<a target='_blank' href='" +
                    row.url_page +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_menu mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_menu' data-title='แก้ไข Menu' data-id='" +
                    row.id_menu_branch +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_menu mx-1 mb-2' type='button' data-id='" +
                    row.id_menu_branch +
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
        $("#m_menu #sl_branch").trigger('change');
        modal.find('.modal-title').text(title);
    }
});

$('#submit_menu').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_menu_branch").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#path_banner").removeClass("required");
    } else {
        $("#path_banner").addClass("required");
    }

    if (check_form_empty($(
            "#form_menu input.required,#form_menu select.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
        $('#m_menu').modal('hide');

        $.ajax({ //ตรวจสอบว่ามีข้อมูลในระบบหรือยัง
            url: "act_fetch.php?action=check_menu_branch",
            type: "POST",
            data: {
                sl_branch: $("#m_menu #sl_branch").val()
            },
            success: function(result) {
                Data = $.parseJSON(result);
                if (Data.length == 0 || (Data[0].id_menu_branch == $("#id_menu_branch")
                        .val())) {

                    $.ajax({ //เพิ่ม,แก้ไข เมนู
                        url: "act_manage.php?action=manage_menu_branch",
                        type: "POST",
                        data: new FormData($('#form_menu')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(result) {
                            if (result == 1) {
                                notify_success();
                                tb_menu.ajax.reload(null, false);
                            } else {
                                notify_fail();
                            }
                        }
                    });
                } else {
                    notify_fail("มีข้อมูลอยู่ในระบบแล้ว");
                }
            }
        });
    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_menu tbody').on('click', ".edit_menu", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_menu_branch",
        data: {
            id_menu_branch: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);

            $("#m_menu #id_menu_branch").val(Data[0].id_menu_branch);
            $("#m_menu #url_page").val(Data[0].url_page);
            $("#m_menu #meta_keyword").val(Data[0].meta_keyword);
            $("#m_menu #meta_description").val(Data[0].meta_description);
            $("#m_menu #alt").val(Data[0].alt);
            $("#m_menu #sl_branch").val(Data[0].id_branch);
            $("#m_menu #sl_branch").trigger('change');
        }
    });
}));

$('#tb_menu tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_menu_branch",
        data: {
            id_menu_branch: $(this).data('id'),
            type: $(this).data('type'),
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

$('#tb_menu tbody').on('click', ".del_menu", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_menu_branch",
            data: {
                id_menu_branch: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_menu.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));
</script>