<?php include('header_back.php'); ?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-envelope"></i> จัดการหน้าติดต่อเรา</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">Contact</h3>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tb_contact">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>หัวข้อ</th>
                                        <th>ชื่อผู้ติดต่อ</th>
                                        <th>เบอร์ผู้ติดต่อ</th>
                                        <th>อีเมลผู้ติดต่อ</th>
                                        <th>วันที่ติดต่อ</th>
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

<div class="modal fade" id="m_contact">
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>ชื่อผู้ติดต่อ</label>
                                    <div>
                                        <input class="form-control" type="text" id="name" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>เบอร์ผู้ติดต่อ</label>
                                    <div>
                                        <input class="form-control" type="text" id="tel" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>E-mail</label>
                                    <div>
                                        <input class="form-control" type="email" id="email" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>หัวข้อ</label>
                                    <div>
                                        <input class="form-control" type="text" id="topic" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>รายละเอียด</label>
                                    <div>
                                        <textarea class="form-control" rows="10" id="detail" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="id_contact" name="id_contact">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>
<?php include('footer_back.php'); ?>
<script type="text/javascript">
tb_contact = $('#tb_contact').DataTable({
    "autoWidth": false,
    "ajax": {
        "url": "act_fetch.php?action=fet_contact",
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
            data: "topic"
        },
        {
            data: "name"
        },
        {
            data: "tel"
        },
        {
            data: "email"
        },
        {
            data: null,
            render: function(row) {
                return DateThai(row.update_time);
            },
        },
        {
            className: 'text-center',
            data: null,
            render: function(row) {
                status = (row.status == "active") ? "checked" : "";
                return '<div class="toggle-flip"><label><input class="activeButton" id="demoNotify" type="checkbox" data-id="' +
                    row.id_contact + '" ' +
                    status +
                    '><span class="flip-indecator"data-toggle-on="ON" data-toggle-off="OFF"></span></label></div>';
            }
        },
        {
            className: 'text-center',
            data: "id_contact",
            render: function(data) {
                return "<button class='btn btn-outline-warning show_contact mx-1 mb-2' type='button' data-toggle='modal' data-target='#m_contact' data-title='Contact' data-id='" +
                    data +
                    "'>ดูรายละเอียด</button><button class='btn btn-outline-danger del_contact mx-1 mb-2' type='button' data-id='" +
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

$('#tb_contact tbody').on('click', ".show_contact", (function(e) { // ดึงข้อมูลมาแสดง
    $.ajax({
        type: "POST",
        url: "act_fetch.php?action=fet_contact",
        data: {
            id_contact: $(this).data('id')
        },
        success: function(result) {
            Data = $.parseJSON(result);
            $("#m_contact #id_contact").val(Data[0].id_contact);
            $("#m_contact #name").val(Data[0].name);
            $("#m_contact #topic").val(Data[0].topic);
            $("#m_contact #tel").val(Data[0].tel);
            $("#m_contact #email").val(Data[0].email);
            $("#m_contact #detail").val(Data[0].detail);
        }
    });
}));

$('#tb_contact tbody').on('click', ".activeButton", (function(e) {
    $.ajax({
        type: "POST",
        url: "act_manage.php?action=change_status_contact",
        data: {
            id_contact: $(this).data('id'),
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

$('#tb_contact tbody').on('click', ".del_contact", (function(e) {
    if (confirm('ต้องการลบข้อมูล ?')) {
        $.ajax({
            type: "POST",
            url: "act_manage.php?action=del_contact",
            data: {
                id_contact: $(this).data('id')
            },
            success: function(result) {
                if (result == 1) {
                    notify_success();
                    tb_contact.ajax.reload(null, false);
                } else {
                    notify_fail();
                }
            }
        });
    }
}));
</script>