<?php include('header_back.php'); ?>
<?php include('../dbconnect_safety.php');?>

<?php
    //เปิด select group_training_public
    $stmt = $safetyDb->prepare('SELECT id_group_training_public,name_group FROM group_training_public');
    $stmt->execute();
    $group_training_public = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //ปิด select group_training_public

    //เปิด select menu_training
    $stmt = $safetyDb->prepare('SELECT id_menu_training,name_menu FROM menu_training WHERE del = "false"');
    $stmt->execute();
    $menu_training = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //ปิด select menu_training
?>
<style>
.small_img {
    height: 2rem;
    width: auto;
}
</style>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-calendar-alt"></i> จัดการหลักสูตร Public</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Training Public</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_training" data-title='เพิ่ม Training'>เพิ่ม</button>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_training_public' type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_training">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อหลักสูตร</th>
                                        <th>กลุ่มของหลักสูตร</th>
                                        <th>หมวดของหลักสูตร</th>
                                        <th>สถานะ</th>
                                        <th class="w-25">รูปปกหลักสูตร</th>
                                        <th>Alt รูปปกหลักสูตร</th>
                                        <th>รูปผู้บรรยาย</th>
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
                                <label>หมวดหลักสูตร</label>
                                <select class="form-control required" name="name_category" id="name_category">
                                    <option value="4">
                                        หมวด 4 ด้านความปลอดภัยในการทำงาน อาชีวอนามัย (Safety)
                                    </option>
                                    <option value="7">
                                        หมวด 7 ด้านศูนย์ทดสอบ
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>กลุ่มหลักสูตร</label>
                                <select class="form-control required" name="group_training_public"
                                    id="group_training_public">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ชื่อหลักสูตร (ที่ใช้แสดง)</label>
                                <input class="form-control required" id="topic_training" name="topic_training"
                                    type="text" placeholder="หลักสูตร">
                            </div>
                            <div class="form-group">
                                <label>เมนูที่จะลิงก์</label>
                                <select class="form-control required" name="menu_training" id="menu_training">
                                    <option></option>
                                    <?php foreach($menu_training as $row){?>
                                    <option value="<?php echo $row['id_menu_training'];?>">
                                        <?php echo $row['name_menu'];?>
                                    </option>
                                    <?php } ?>
                                </select>
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
                                <label>เลือกรูปผู้บรรยาย</label>
                                <input class="form-control" id="coach_img" name="coach_img" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_training_public" name="id_training_public">
                    <button class="btn btn-primary" type="button" id="submit_training">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
$('#group_training_public').select2({
    allowClear: true,
    placeholder: "เลือกกลุ่มของหลักสูตร"
});
$('#menu_training').select2({
    allowClear: true,
    placeholder: "เลือกเมนูที่จะลิงก์"
});

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
    notify_success("คักลอกข้อมูลลิ้งก์สำเร็จ");
}

function fecth_training(category) {
    $.ajax({
        method: "POST",
        url: "act_fetch.php?action=fet_group_training_by_name_category",
        dataType: 'json',
        async: false,
        data: {
            name_category: category
        },
        success: function(result) {
            var options = [];

            options.push({
                text: "",
                id: ""
            });

            $.each(result, function(key, value) {
                options.push({
                    text: value['name_group'],
                    id: value['id_group_training_public']
                });
            })

            $("#group_training_public").empty().select2({
                data: options
            });

            $('#group_training_public').select2({
                allowClear: false,
                placeholder: "เลือกกลุ่มของหลักสูตร",
                tags: true
            });
        }
    });
}

$("#name_category").on("change", function() {
    fecth_training($(this).val());
});

tb_training = $('#tb_training').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_training_public', data.id_training_public);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_training_public",
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
            data: "topic_training"
        },
        {
            data: "name_group"
        },
        {
            data: "name_category"
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_training_public + '" ' +
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
            data: "coach_img",
            render: function(data) {
                return '<a target="_blank" href="' + data +
                    '"><img class="rounded small_img" src="<?php echo $base_url;?>' +
                    data + '" alt=""></a>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a href='" + row.shortlink +
                    "'><span id='shortlink_" +
                    row.id_training_public + "'>" +
                    row.shortlink +
                    "</span></a><button class='btn btn-outline-secondary mx-1 mb-2' type='button' " +
                    (row.shortlink || "disabled") +
                    " onclick=copyToClipboard('#shortlink_" +
                    row.id_training_public + "')>คัดลอก</button>";
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a target='_blank' href='" +
                    row.url_page +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_training_public mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_training' data-title='แก้ไข Menu' data-id='" +
                    row.id_training_public +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_training mx-1 mb-2' type='button' data-id='" +
                    row.id_training_public +
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
        $("#m_training #name_category").val(4);
        fecth_training(4);
        $("#m_training #group_training").trigger('change');
        modal.find("textarea").val("");
        modal.find('.modal-title').text(title);
    }
});

$('#submit_training').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_training_public").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#cover_img").removeClass("required");
        $("#coach_img ").removeClass("required");
    } else {
        $("#cover_img").addClass("required");
        $("#coach_img ").addClass("required");
    }

    if (check_form_empty($(
            "#form_training input.required,#form_training textarea.required,#form_training select.required"
        ))) { // เช็คกรอกข้อมูลครบหรือไม่

        $.ajax({ //เพิ่ม,แก้ไข หลักสูตร
            url: "act_manage.php?action=manage_training_public",
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

$('#tb_training tbody').on('click', ".edit_training_public", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_training_public",
        data: {
            id_training_public: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);

            $("#m_training #name_category").val(Data[0].name_category);
            fecth_training(Data[0].name_category);
            $("#m_training #group_training_public").val(Data[0].id_group_training_public);
            $("#m_training #group_training_public").trigger('change');
            $("#m_training #menu_training").val(Data[0].id_menu_training);
            $("#m_training #menu_training").trigger('change');
            $("#m_training #alt").val(Data[0].alt);
            $("#m_training #id_training_public").val(Data[0].id_training_public);
            $("#m_training #topic_training").val(Data[0].topic_training);

        }
    });
}));

$('#tb_training tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_training_public",
        data: {
            id_training_public: $(this).data('id'),
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
            url: "act_manage.php?action=del_training_public",
            data: {
                id_training_public: $(this).data('id')
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

$('.sort_training_public').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {
        $.each(tb_training.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_training_public",
                data: {
                    id_training_public: value["id_training_public"],
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