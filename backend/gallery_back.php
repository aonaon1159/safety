<?php include('header_back.php'); ?>
<?php include('../dbconnect_safety.php');?>
<?php include('../function.php');?>
<?php
  $stmt = $safetyDb->prepare('SELECT id,name_th
  FROM provinces');
  $stmt->execute();
  $provinces = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="far fa-images"></i> จัดการภาพการอบรม</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Gallery</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_gallery" data-title='เพิ่ม Gallery'>เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_gallery">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>หลักสูตร</th>
                                        <th>ประเภท</th>
                                        <th>วันที่</th>
                                        <th>เขตพื้นที่</th>
                                        <th class="w-25">รูปหน้าปก</th>
                                        <th>Alt รูป</th>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="text-center">
                            <h3>
                                ภาพการอบรม
                            </h3>
                            <h3>
                                หลักสูตร:
                                <span id="topic_training" style="font-weight: normal;">-</span>
                            </h3>
                            <h3>
                                วันที่อบรม:
                                <span id="date" style="font-weight: normal;">-</span>
                            </h3>
                            <button class='btn btn-outline-info sort_gallery' type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_img">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อภาพ</th>
                                        <th class="w-25">รูป</th>
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

<div class="modal fade" id="m_detail_alt">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alt รูปภาพ</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <span id="detail_alt"></span>
            </div>
        </div>
    </div>
</div>

<form method="post" id="form_gallery" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_gallery">
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
                                <label>ประเภท</label><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control required" name="sl_type" id="sl_type">
                                            <option value="public" selected>Public</option>
                                            <option value="inhouse">Inhouse</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>หลักสูตร</label><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control required" name="sl_topic_training"
                                            id="sl_topic_training">
                                            <option></option>
                                            <?php foreach($topic_training as $row){?>
                                            <option value="<?php echo $row['topic_training'];?>">
                                                <?php echo $row['topic_training'];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>เขตพื้นที่</label><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control required" name="sl_province" id="sl_province">
                                            <option></option>
                                            <?php foreach($provinces as $row){?>
                                            <option value="<?php echo $row['id'];?>">
                                                <?php echo $row['name_th'];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="button" id="addRow">+
                                    เพิ่มวันที่</button>
                                <button class="btn btn-danger" type="button" id="removeRow">-
                                    ลบวันที่</button>
                            </div>
                            <div class="group_datepicker">
                                <div class="div_date">
                                    <div class="form-group">
                                        <label>วันที่ <span class="day">1</span></label>

                                        <input class="form-control required input_date_gallery" id="date_gallery1"
                                            name="date_gallery[]" type="text" placeholder="เลือกวันที่">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alt รูปภาพ</label>
                                <textarea class="form-control" id="alt" name="alt" rows="5"
                                    placeholder="คำอธิบายรูปภาพ"></textarea>
                            </div>
                            <div class="form-group">
                                <label>เลือกไฟล์รูป (หลายไฟล์)</label>
                                <input class="form-control mb-2" id="imgGallery" name="imgGallery[]" type="file"
                                    multiple="multiple">
                                <span id="size_files"><span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_gallery" name="id_gallery">
                    <button class="btn btn-primary" type="button" id="submit_gallery">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
$(document).on('focus', ".input_date_gallery", function() {
    $(".input_date_gallery").datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true
    });
});
$('#sl_province').select2({
    allowClear: true,
    placeholder: "เลือกจังหวัด"
});
tb_gallery = $('#tb_gallery').DataTable({
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_album",
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
            data: "topic_training"
        },
        {
            data: "type"
        },
        {
            data: null,
            render: function(row) {
                date = JSON.parse(row.date);
                date_thai = [];
                $.each(date, function(index, value) {
                    date_thai.push(DateThai(value) + "<br>");
                });
                return date_thai.toString();
            },
        },
        {
            data: "name_th"
        },
        {
            className: 'text-center',
            data: "path",
            render: function(data) {
                return '<a target="_blank" href="' + data +
                    '"><img class="rounded" src="<?php echo $base_url;?>' +
                    data + '" alt=""></a>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<button class='btn btn-outline-secondary show_alt_gallery mx-1' type='button' data-toggle='modal' data-target='#m_detail_alt' data-title='ดู alt' data-id='" +
                    row.id_gallery + "'>Alt</button>";
            },
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_gallery + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<button class='btn btn-outline-warning edit_gallery mx-1' type='button' data-toggle='modal' data-target='#m_gallery' data-title='แก้ไข Gallery' data-id='" +
                    row.id_gallery + "' data-type='" +
                    row.type +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_gallery mx-1' type='button' data-id='" +
                    row.id_gallery +
                    "'>ลบ</button><br><button class='btn btn-outline-secondary detail_gallery mx-1 mt-2' type='button' data-id_gallery='" +
                    row.id_gallery + "'>ดูรายละเอียด</button>";
            },
        }
    ],
    "columnDefs": [{
        "targets": -1,
        "createdCell": function(td) {
            td.setAttribute('nowrap', '');
        }
    }]
});

function clear_select() {
    $("#m_gallery select").val('');
    $("#m_gallery input").val('');
    $("#m_gallery textarea").val('');
    $("#m_gallery #sl_type").val('public');
    $("#m_gallery #sl_topic_training").trigger('change');
    fecth_training('public');
    $("#m_gallery #sl_province").trigger('change');
    $("#m_gallery #size_files").html("");
    $("#m_gallery .progress-bar").width('0%');
    $("#m_gallery .progress-bar").html('');
    $(".div_date .form-group:not(:eq(0))").remove();
}

function clear_table_img() {
    $("#topic_training").text("-");
    $("#date").text("-");
    $('#tb_img').dataTable().fnClearTable();

    $('html, body').animate({
        scrollTop: $("#tb_gallery").offset().top
    }, 500);
}

$('#m_gallery').on('show.bs.modal', function(event) { // ทำการเปลี่ยน title และลบข้อมูลทั้งหมดใน input
    if (!($("[id=m_gallery]").data('bs.modal') || {})._isShown) {
        var button = $(event.relatedTarget); // Button that triggered the modal 
        var modal = $(this);
        var title = button.data('title');
        if (title != modal.find('.modal-title').text()) {
            modal.find("input").val("");
            clear_select();
            modal.find('.modal-title').text(title);
        }
    }
});

$('#submit_gallery').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_gallery").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#imgGallery").removeClass("required");
    } else {
        $("#imgGallery").addClass("required");
    }
    if (check_form_empty($(
            "#form_gallery input.required,#form_gallery select.required"
        ))) { // เช็คกรอกข้อมูลครบหรือไม่

        $.ajax({ //เพิ่ม,แก้ไข รูปภาพ
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = ((evt.loaded / evt.total) * 100);
                        $(".progress-bar").width(percentComplete + '%');
                        $(".progress-bar").html(percentComplete.toFixed(2) + '%');
                    }
                }, false);
                return xhr;
            },
            url: "act_manage.php?action=manage_gallery",
            type: "POST",
            data: new FormData($('#form_gallery')[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('html').css('cursor', 'wait');
                $("#m_gallery input").attr('disabled', true);
                $('#m_gallery select').attr('disabled', true);
                $('#m_gallery button').attr('disabled', true);
            },
            success: function(result) {
                if (result == 1) {
                    $('html').css('cursor', 'default');
                    $("#m_gallery input").attr('disabled', false);
                    $('#m_gallery select').attr('disabled', false);
                    $('#m_gallery button').attr('disabled', false);

                    $('#m_gallery').modal('hide');
                    notify_success();
                    tb_gallery.ajax.reload(null, false);

                    $("#m_gallery").find("input").val("");
                    clear_select();
                    clear_table_img();
                } else {
                    $('#m_gallery').modal('hide');
                    notify_fail();
                }
            }
        });

    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_gallery tbody').on('click', ".edit_gallery", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_album",
        data: {
            id_gallery: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);
            var date = JSON.parse(Data[0].date);
            clear_select();
            $("#m_gallery #sl_type").val(Data[0].type);
            fecth_training(Data[0].type);
            $("#m_gallery #sl_topic_training").val(Data[0].topic_training);
            $("#m_gallery #sl_topic_training").trigger('change');
            if ($("#m_gallery #sl_topic_training").val() == null) {
                var newOption = new Option(Data[0].topic_training, Data[0].topic_training, true,
                    true);
                // Append it to the select
                $('#sl_topic_training').append(newOption).trigger('change');
            }
            $("#m_gallery #sl_province").val(Data[0].id_provinces);
            $("#m_gallery #sl_province").trigger('change');
            $("#m_gallery #alt").val(Data[0].alt);
            $("#m_gallery #id_gallery").val(Data[0].id_gallery);
            create_datepicker(date);
        }
    });
}));

$('#tb_gallery tbody').on('click', ".show_alt_gallery", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_alt_gallery",
        data: {
            id_gallery: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);
            if (Data[0].alt) {
                $("#m_detail_alt #detail_alt").html(Data[0].alt);
            } else {
                $("#m_detail_alt #detail_alt").html(
                    "<h1 class='text-danger text-center'>ไม่พบข้อมูล</h1>");
            }
        }
    });
}));

var tb_img = $('#tb_img').DataTable({});

$('#tb_gallery tbody').on('click', ".detail_gallery", (function(e) { // ดึงข้อมูลมาแสดง
    tb_img.destroy();
    tb_img = $('#tb_img').DataTable({
        "createdRow": function(row, data, dataIndex) {
            $(row).attr('data-id_gallery', data.id_gallery);
            $(row).attr('data-sequence', data.sequence);
        },
        "autoWidth": false,
        "ajax": {
            "url": "act_fetch.php?action=fet_gallery",
            "method": 'POST',
            "dataSrc": "",
            "data": {
                id_gallery: $(this).data('id_gallery'),
            }
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
                data: "path",
                render: function(data) {
                    return '<a target="_blank" href="' + data +
                        '"><img class="rounded" src="<?php echo $base_url;?>' +
                        data + '" alt=""></a>';
                }
            },
            {
                className: 'text-center',
                data: null,
                render: function(row) {
                    status = (row.status == "active") ? "checked" : "";
                    return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                        row.id_gallery + '" ' +
                        status +
                        '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
                }
            },
            {
                className: 'text-center',
                data: null,
                render: function(row) {
                    return "<button class='btn btn-outline-danger del_gallery mx-1' type='button' data-id='" +
                        row.id_gallery +
                        "'>ลบ</button>";
                },
            }
        ],

        "columnDefs": [{
            "targets": -1,
            "createdCell": function(td) {
                td.setAttribute('nowrap', '');
            }
        }, {
            "className": "grabbable",
            "targets": 0
        }]
    });

    $("#topic_training").text($(this).parents("tr").find("td:eq(1)").text());
    $("#date").text($(this).parents("tr").find("td:eq(3)").text());

    $('html, body').animate({
        scrollTop: $("#tb_img").offset().top
    }, 500);
}));

$('.sort_gallery').on('click', (function(e) {
    if (confirm('ยืนยันลำดับ ?')) {
        var error = 0;
        var new_id_gallery = tb_img.rows().data()[0].id_gallery; //หาไอดีหน้าปกใหม่
        var old_id_gallery = tb_img.row(0).data().id_gallery; //หาไอดีหน้าปกก่อนเปลี่ยน

        $.each(tb_img.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_gallery",
                data: {
                    id_gallery: value.id_gallery,
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

        $.ajax({
            type: "POST",
            url: "act_manage.php?action=change_group_gallery",
            data: {
                new_id_gallery: new_id_gallery,
                old_id_gallery: old_id_gallery
            },
            success: function(result) {
                if (result == 1) {
                    error = 1;
                } else {
                    notify_fail();
                }
            }
        });

        if (!error) notify_success();
        clear_table_img();
        tb_gallery.ajax.reload(null, false);
    }
}));

$('tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_gallery",
        data: {
            id_gallery: $(this).data('id'),
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

$('tbody').on('click', ".del_gallery", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_gallery",
            data: {
                id_gallery: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_gallery.ajax.reload(null, false);
                    tb_img.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));

$('#imgGallery').change(function() {
    var files = $(this).get(0).files;
    var current_file_size = 0;
    var MAX_FILE_SIZE = 180; // 180 MB

    for (i = 0; i < files.length; i++) {
        current_file_size += files[i].size;
    }
    current_file_size = current_file_size / (1024 * 1024);


    if (current_file_size > MAX_FILE_SIZE) {
        alert("ขนาดไฟล์ต้องไม่เกิน " + MAX_FILE_SIZE + " MB! (ขนาดของคุณคือ " + current_file_size.toFixed(2) +
            " MB)");
        $(this).val("");
    } else {
        $("#m_gallery #size_files").html("Size: " + current_file_size.toFixed(2) + " MB");

    }
});

$("#addRow").click(function() {
    var rowCount = $("#m_gallery .input_date_gallery").length;
    $(".input_date_gallery").datepicker("destroy");
    // ส่วนของการ clone ข้อมูลด้วย jquery clone() ค่า true คือ
    // การกำหนดให้ ไม่ต้องมีการ ดึงข้อมูลจากค่าเดิมมาใช้งาน
    // รีเซ้ตเป็นค่าว่าง ถ้ามีข้อมูลอยู่แล้ว ทั้ง select หรือ inputs
    $(".div_date .form-group:last").clone(true)
        .find(".day").html(rowCount + 1).end()
        .find(".input_date_gallery").val("").end()
        .find(".input_date_gallery").removeAttr("id").end()
        .find(".input_date_gallery").attr("id", "date_gallery" + (rowCount + 1)).end()
        .appendTo($("#m_gallery .div_date"));
});
$("#removeRow").click(function() {
    // ส่วนสำหรับการลบ
    var rowCount = $('#m_gallery .input_date_gallery').length;
    if (rowCount > 1) {
        // จะลบรายการได้ อย่างน้อย ต้องมี 1 รายการ
        $("#m_gallery .input_date_gallery:last").datepicker("destroy");
        $("#m_gallery .input_date_gallery:last").removeAttr("id");
        $("#m_gallery .div_date .form-group:last").remove(); // ลบรายการสุดท้าย
    } else {
        // เหลือ 1 รายการลบไม่ได้
        alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");
    }
});

function create_datepicker(date) {
    var rowCount = 1;
    for (key in date) {
        parts = (date[key]).split('-');
        newdate = parts[2] + '-' + parts[1] + '-' + parts[0];
        $(".input_date_gallery").datepicker("destroy");

        $(".div_date .form-group:last").clone(true)
            .find(".day").html(rowCount).end()
            .find(".input_date_gallery").val(newdate).end()
            .find(".input_date_gallery").removeAttr("id").end()
            .find(".input_date_gallery").attr("id", "date_gallery" + (rowCount)).end()
            .appendTo($("#m_gallery .div_date"));
        rowCount++

    }
    $(".div_date .form-group:eq(0)").remove();
}

fecth_training('public');

function fecth_training(type) {
    $.ajax({
        method: "POST",
        url: "act_fetch.php?action=fet_training_by_type",
        dataType: 'json',
        async: false,
        data: {
            type: type
        },
        success: function(result) {
            var options = [];

            options.push({
                text: "",
                id: ""
            });

            $.each(result, function(key, value) {
                options.push({
                    text: value['topic_training'],
                    id: value['id_training']
                });
            })

            $("#sl_topic_training").empty().select2({
                data: options
            });

            $('#sl_topic_training').select2({
                allowClear: false,
                placeholder: "เลือกหลักสูตร",
                tags: true
            });
        }
    });
}

$("#sl_type").on("change", function() {
    fecth_training($(this).val());
});
</script>