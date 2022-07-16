<?php include('header_back.php'); ?>
<?php include('../dbconnect_safety.php'); ?>
<?php
    $stmt = $safetyDb->prepare("SELECT CONCAT('[',GROUP_CONCAT(REPLACE(REPLACE(tag,']',''),'[','') SEPARATOR ','),']') AS allTag FROM (SELECT JSON_EXTRACT(tag,'$.tags') AS tag FROM article GROUP BY tag) AS T1");
    $stmt->execute();
    $allTag = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //ดึงโปรโมชันมาเพื่อเลือก
    $stmt = $safetyDb->prepare("SELECT id_promotion,name FROM promotion WHERE del = 'false'");
    $stmt->execute();
    $promotion = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<style>
    
    .a-link{
    display: block;
    color: #0d6efd;
    text-decoration: underline !important;
}
.bootstrap-tagsinput {
    width: 100%;
    border: 2px solid #ced4da;
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
}

.bootstrap-tagsinput:focus {
    border-color: #088243;
}

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

.img_fix_width {
    width: calc(10vh + 30px);
}
</style>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-book"></i> จัดการบทความ</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Article</h3>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_article' type='button'>บันทึกลำดับ</button>
                        </div>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_article" data-title='เพิ่ม Article'>เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_article">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>หัวข้อ</th>
                                        <th>Tag</th>
                                        <th>Keyword</th>
                                        <th>Description</th>
                                        <th>วันที่สร้าง</th>
                                        <th>จำนวนผู้เข้าชม</th>
                                        <th>รูปปกแรก</th>
                                        <th>รูปโปรโมชัน</th>
                                        <th>Alt รูปปกแรก</th>
                                        <th>สถานะ</th>
                                        <th>บทความแนะนำ</th>
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

<form method="post" id="form_article" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_article">
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
                                <label>หัวข้อบทความ <span class="limit_topic text-danger"></span></label>
                                <input class="form-control required" id="topic" name="topic" type="text"
                                    placeholder="หัวข้อบทความ">
                            </div>
                            <div class="form-group">
                                <label>ลิ้งก์สั้น</label>
                                <input class="form-control" id="short_url" name="short_url" type="text"
                                    placeholder="ลิ้งก์สั้น">
                            </div>
                            <div class="form-group">
                                <label>เลือกหน้าปกบทความ</label>
                                <input class="form-control" id="cover_img" name="cover_img" type="file">
                            </div>
                            <div class="form-group">
                                <label>Alt รูปปกบทความ</label>
                                <input class="form-control" id="alt" name="alt" type="text"
                                    placeholder="คำอธิบายรูปภาพ">
                            </div>
                            <div class="form-group">
                                <label>Tag ของบทความ</label>
                                <input class="form-control" id="tag" name="tag" type="text"
                                    placeholder="tag กด enter เพื่อยืนยัน">
                            </div>
                            <div class="form-group">
                                <label>โปรโมชัน</label><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <select class="form-control required" name="sl_promotion" id="sl_promotion">
                                            <option></option>
                                            <?php foreach($promotion as $row){?>
                                            <option value="<?php echo $row['id_promotion'];?>">
                                                <?php echo $row['name'];?>
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
                                <label>Meta description หน้าเว็ป <span class="limit_description text-danger"></span></label>
                                <input class="limit_description form-control" id="meta_description" name="meta_description" type="text"
                                    placeholder="meta description">
                            </div>
                            <div class="form-group">
                                <label>เนื้อหาบทความ</label>
                                <textarea class="required" id="summernote" name="content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_article" name="id_article">
                    <button class="btn btn-primary" type="button" id="submit_article">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include('footer_back.php'); ?>
<script type="text/javascript">
var limit_topic = 80; //ความยาวของอักขระ topic
var limit_description = 155; //ความยาว meta description

$(".limit_topic").html("(ความยาวไม่เกิน " + limit_topic + " ตัวอักษร)");
$(".limit_description").html("(ความยาวไม่เกิน " + limit_description + " ตัวอักษร)");

$('#sl_promotion').select2({
    allowClear: true,
    placeholder: "เลือกโปรโมชัน"
});

function onlyUnique(value, index, self) { //ตัด tag ซ้ำออก
    return self.indexOf(value) === index;
}
var allTag = <?php echo ($allTag[0]['allTag']) ? $allTag[0]['allTag'] : "[]" ; ?>;
var allTagUnique = allTag.filter(onlyUnique);

$(document).on("focusin", ".amsify-suggestags-input-area", function() {
    $(".amsify-suggestags-list").width($(".amsify-suggestags-input-area").width() - 3);
});

tb_article = $('#tb_article').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_article', data.id_article);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_article",
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
            data: "topic"
        },
        {
            data: null,
            render: function(row) {
                var tag = $.parseJSON(row.tag);
                if (tag != null) {

                    return tag['tags'].join(',<br>');
                } else {
                    return tag;
                }
            }
        },
        {
            data: "meta_keyword"
        },
        {
            data: "meta_description"
        },
        {
            data: null,
            render: function(row) {
                return DateThai(row.create_date);
            }
        },
        {

            data: "count_view"
        },
        {
            className: 'text-center',
            data: "cover_img",
            render: function(data) {
                return '<a target="_blank" href="' + (data) +
                    '"><img class="rounded img_fix_width" src="<?php echo $base_url;?>' +
                    (data) + '" alt=""></a>';
            }
        },
        {
            className: 'text-center',
            data: "img_promotion",
            render: function(data) {
                data = (data == null) ? "" : data;
                return '<a target="_blank" href="' + (data) +
                    '"><img class="rounded img_fix_width" src="<?php echo $base_url;?>' +
                    (data) + '" alt=""></a>';
            }
        },
        {
            data: "alt"
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_article + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.recommend == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="recommendButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_article + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a href='" + row.shortlink +
                    "'><span id='shortlink_" +
                    row.id_article + "'>" +
                    row.shortlink +
                    "</span></a><button class='btn btn-outline-secondary mx-1 mb-2' type='button' " +
                    (row.shortlink || "disabled") +
                    " onclick=copyToClipboard('#shortlink_" +
                    row.id_article + "')>คัดลอก</button>";
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a target='_blank' href='<?php echo $base_url;?>/article_detail?article=" +
                    row.topic +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_article mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_article' data-title='แก้ไข Article' data-id='" +
                    row.id_article +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_article mx-1 mb-2' type='button' data-id='" +
                    row.id_article +
                    "'>ลบ</button>";
            }
        }
    ],
    "columnDefs": [{
        "className": "grabbable",
        "targets": 0
    }],
    "initComplete": function(settings, json) {
        $('#tb_article').DataTable().page('last').draw('page'); //เปิดหน้าสุดท้ายเมื่อสร้างตารางเสร็จ
    }
});

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
    notify_success("คัดลอกข้อมูลลิ้งก์สำเร็จ");
}

function clearinput() {
    $("#m_article input").val("");
    $("#m_article #summernote").summernote("code", "");
    $("#m_article #tag").amsifySuggestags({}, 'destory');
    $('#m_article #tag').amsifySuggestags({
        suggestions: allTagUnique
    });
}

$('#m_article').on('show.bs.modal', function(event) { // ทำการเปลี่ยน title และลบข้อมูลทั้งหมดใน input
    var modal = $(this);
    if (!(modal.data('bs.modal') || {})._isShown) {
        var button = $(event.relatedTarget); // Button that triggered the modal 
        var title = button.data('title');
        if (title != (modal.find('.modal-title').first()).text()) {
            clearinput();
            modal.find('.modal-title').text(title);
        }
    }
});

$('#submit_article').on('click', (function(e) {
    $(".note-editable span").css("font-size", "");
    e.preventDefault();
    if ($("#id_article").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกรูป
        $("#cover_img").removeClass("required");
    } else {
        $("#cover_img").addClass("required");
    }

    //หาความยาวของชื่อบทความ
    var matches = $("#topic").val().split("");

     //หาความยาวของ meta description
    var matches2 = $("#meta_description").val().split("");

    // Count number of words
    count_topic = matches.filter(function(word) {
        return word.length > 0;
    }).length;

    count_description = matches2.filter(function(word) {
        return word.length > 0;
    }).length;

    if (count_topic <= limit_topic) {
        if (count_description <= limit_description){
                if (check_form_empty($("#form_article input.required")) && check_form_empty($(
                    "#form_article textarea.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
                $.ajax({
                    url: "act_manage.php?action=manage_article",
                    type: "POST",
                    data: new FormData($('#form_article')[0]),
                    cache: false,
                    async: false,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        if (result == 1) {
                            $('#m_article').modal('hide');
                            clearinput();
                            notify_success();
                            tb_article.ajax.reload(null, false);
                        } else {
                            $('#m_article').modal('hide');
                            notify_fail();
                        }
                    }
                });
            } else {
                alert('กรุณากรอกข้อมูลให้ครบ');
            }
        } else {
            alert('meta description ความยาวเกิน ' + limit_description + ' ตัวอักษร');
        }
        
    } else {
        alert('ชื่อบทความยาวเกิน ' + limit_topic + ' ตัวอักษร');
    }

}));

$('#tb_article tbody').on('click', ".edit_article", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_article",
        data: {
            id_article: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);

            var tag = JSON.parse(Data[0].tag);

            $("#m_article #id_article").val(Data[0].id_article);
            $("#m_article #topic").val(Data[0].topic);
            $("#m_article #short_url").val(Data[0].shortlink);
            $("#m_article #tag").val((tag == null) ? "" : tag['tags']);
            $('#m_article #tag').amsifySuggestags({
                suggestions: allTagUnique
            });
            $("#m_article #sl_promotion").val(Data[0].id_promotion);
            $("#m_article #sl_promotion").trigger('change');
            $("#m_article #meta_keyword").val(Data[0].meta_keyword);
            $("#m_article #meta_description").val(Data[0].meta_description);
            $("#m_article #alt").val(Data[0].alt);
            $("#m_article #summernote").summernote("code", Data[0].content);
            $("body .lazy").each(function() {
                $(this).attr("src", encodeURI($(this).data("src")));
            });
            $("#m_article #summernote").val($('#summernote').summernote('code'));
        }
    });
}));

$('#tb_article tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_article",
        data: {
            id_article: $(this).data('id'),
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

$('#tb_article tbody').on('click', ".recommendButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_recommend_article",
        data: {
            id_article: $(this).data('id'),
            recommend: $(this).prop("checked")
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

$('#tb_article tbody').on('click', ".del_article", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_article",
            data: {
                id_article: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_article.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));

$(document).ready(function() {
    $('#summernote').summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'hr', 'file']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ],
        height: ($(window).height() - 100),
        placeholder: 'รายละเอียดบทความ',
        minHeight: null,
        maxHeight: null,
        callbacks: {
            onFileUpload: function(files) {
                uploadFile(files[0]);
            }
        }
    });

    function uploadFile(file) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: "act_manage.php?action=upload_file", // replace with your url
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                var linkfile = url.split("article/");
                var btn =
                    '<button style="width:50%;" class="d-flex justify-content-between btn btn-block btn--large btn--radius btn--transparent btn--green btn--green-hover-black font--light text-uppercase submit-search">' +
                    linkfile[1] + '<i class="fas fa-download"></i></button>';
                $('#summernote').summernote('createLink', {
                    text: btn,
                    url: url,
                    isNewWindow: true
                });
            }
        });
    }
});

$('.sort_article').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {

        $.each(tb_article.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_article",
                data: {
                    id_article: value["id_article"],
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

        tb_article.ajax.reload(null, false);
        if (!error) notify_success();
    }
}));
</script>