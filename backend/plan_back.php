<?php include('header_back.php'); ?>
<?php include('../dbconnect_booking.php');?>

<?php
    $year = date("Y");
    //เปิด select branch
    $stmt = $bookingDb->prepare('SELECT id_branch,namebranch FROM branch WHERE status_branch = "active" ORDER BY namebranch');
    $stmt->execute();
    $branch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //ปิด select branch
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-calendar-alt"></i> จัดการแผนการอบรม</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Plan</h3>
                        <button class="btn btn-outline-info float-right m-3" type="button" data-toggle="modal"
                            data-target="#m_plan" data-title='เพิ่ม Plan'>เพิ่ม</button>
                        <div class="text-center">
                            <button class='btn btn-outline-info sort_plan' type='button'>บันทึกลำดับ</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_plan">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>เขตพื้นที่</th>
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

<form method="post" id="form_plan" action="#" enctype="multipart/form-data">
    <div class="modal fade" id="m_plan">
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
                                            <option value="" disabled selected>
                                                เลือกเขตพื้นที่
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
                                <label>เลือกไฟล์</label>
                                <input class="form-control required" id="filePlan" name="filePlan" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id_plan" name="id_plan">
                    <button class="btn btn-primary" type="button" id="submit_plan">บันทึก</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
tb_plan = $('#tb_plan').DataTable({
    "createdRow": function(row, data, dataIndex) {
        $(row).attr('data-id_banner', data.id_banner);
    },
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_plan",
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
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_plan + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                return "<a target='_blank' href='" +
                    row.path +
                    "'<button class='btn btn-outline-secondary mx-1 mb-2' type='button'>ดู</button></a><button class='btn btn-outline-warning edit_plan mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_plan' data-title='แก้ไข Plan' data-id='" +
                    row.id_plan +
                    "'>แก้ไข</button><button class='btn btn-outline-danger del_plan mx-1 mb-2' type='button' data-id='" +
                    row.id_plan +
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

$('#submit_plan').on('click', (function(e) {
    e.preventDefault();
    if ($("#id_banner").val() != "") { // ถ้าเป็นแก้ไขไม่จำเป็นต้องเลือกไฟล์
        $("#imgBanner").removeClass("required");
    } else {
        $("#imgBanner").addClass("required");
    }
    if (check_form_empty($("#form_plan input.required"))) { // เช็คกรอกข้อมูลครบหรือไม่
        $.ajax({
            url: "act_manage.php?action=manage_plan",
            type: "POST",
            data: new FormData($('#form_plan')[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('html').css('cursor', 'wait');
                $("#m_plan input").attr('disabled', true);
                $('#m_plan select').attr('disabled', true);
                $('#m_plan button').attr('disabled', true);
            },
            success: function(result) {
                if (result == 1) {
                    $('html').css('cursor', 'default');
                    $("#m_plan input").attr('disabled', false);
                    $('#m_plan select').attr('disabled', false);
                    $('#m_plan button').attr('disabled', false);

                    $('#m_plan').modal('hide');

                    notify_success();
                    tb_plan.ajax.reload(null, false);
                } else {
                    $('#m_plan').modal('hide');
                    notify_fail();
                }
            }
        });
    } else {
        alert('กรุณากรอกข้อมูลให้ครบ');
    }
}));

$('#tb_plan tbody').on('click', ".edit_plan", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_plan",
        data: {
            id_plan: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);
            $("#m_plan #id_plan").val(Data[0].id_plan);
            $("#m_plan #sl_branch").val(Data[0].id_branch);
        }
    });
}));

$('#tb_plan tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_plan",
        data: {
            id_plan: $(this).data('id'),
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

$('#tb_plan tbody').on('click', ".del_plan", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_plan",
            data: {
                id_plan: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_plan.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));

$('.sort_plan').on('click', (function(e) {
    var error = 0;
    if (confirm('ยืนยันลำดับ ?')) {
        $.each(tb_plan.rows().data(), function(key, value) {
            $.ajax({
                type: "POST",
                url: "act_manage.php?action=sort_plan",
                data: {
                    id_plan: value["id_plan"],
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