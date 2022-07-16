(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function (event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function (event) {
		event.preventDefault();
		if (!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();



})();

function notify_success(ms) {//แสดง notify success
    ms = ms || 'ทำการบันทึกข้อมูลเรียบร้อย';
	$.notify({
		title: "บันทึกสำเร็จ : ",
		message: ms,
		icon: 'fa fa-check'
	}, {
		type: "info"
	});
}

function notify_fail(ms) {//แสดง notify fail
	ms = ms || 'ไม่สามารถทำการบันทึกได้';
	$.notify({
		title: "บันทึกไม่สำเร็จ : ",
		message: ms,
		icon: 'fas fa-time'
	}, {
		type: "danger"
	});
}

function check_form_empty(form) {//ตรวจสอบ form มีค่าว่างหรือไม่
	return form.filter(function () {
		return $.trim($(this).val()).length == 0
	}).length == 0;
}

function DateThai(strDate) {
	date = new Date(strDate);
	strYear = date.getFullYear() + 543;
	strMonth = date.getMonth();
	strDate = date.getDate();
	strMonthCut = new Array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
	strMonthThai = strMonthCut[strMonth];
	return strDate + " " + strMonthThai + " " + strYear;
}
