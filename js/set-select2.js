$( document ).ready(function() {
    function check_disable(id_group){
        if(id_group == 22){ //หลักสูตรออนไลน์
            $("#sl_branch").val(0);
            $("#sl_branch").trigger('change');
            $('#sl_branch').attr("disabled",true);
        }else{
            $('#sl_branch').attr("disabled",false);
        }
    }

    function fecth_training(id_group){
        $.ajax({
            method: "POST",
            url: "backend/act_fetch.php?action=fet_training_by_id_group",
            dataType : 'json',
            data: {
            id_group : id_group
            },
            success: function(result) {
                var options = [];

                options.push({
                    text: "",
                    id: ""
                });

                $.each(result, function (key, value) {
                    options.push({
                        text: value['topic_training'],
                        id: value['id_training']
                    });
                })

                $("#sl_training").empty().select2({
                    allowClear: true,
                    placeholder: "เลือก หลักสูตร",
                    data: options
                });

                if (sl_training) {
                    $("#sl_training").val(sl_training);
                    $("#sl_training").trigger('change');
                }
            }
        });
    }

    if ($('#sl_group').length) {
        $('#sl_group').select2({
            allowClear: true,
            placeholder: "เลือก ประเภท"
        });
        $('#sl_training').select2({
            placeholder: "กรุณาเลือกประเภท"
        });

        if(sl_training == 0){
            $('#sl_training').attr("disabled",true);
        }
    }
    else{
        $('#sl_training').select2({
            allowClear: true,
            placeholder: "เลือก หลักสูตร"
        });
    }

    $('#sl_branch').select2({
        allowClear: true,
        placeholder: "เลือก เขตพื้นที่"
    });

    $('#sl_month').select2({
        allowClear: true,
        placeholder: "เลือก เดือน"
    });

    if (typeof sl_group !== "undefined" && sl_group != 0) {
        fecth_training(sl_group);
        check_disable(sl_group);
        $("#sl_group").val(sl_group);
        $("#sl_group").trigger('change');
        $('#sl_training').attr("disabled",false);
    }

    if (typeof sl_branch !== "undefined" && sl_branch != 0) {
        $("#sl_branch").val(sl_branch);
        $("#sl_branch").trigger('change');
    }

    if (sl_month) {
        $("#sl_month").val(sl_month);
        $("#sl_month").trigger('change');
    }
    else{
        var d = new Date(),
        now_month = (d.getMonth()+1);
        $('#sl_month').val(now_month);
        $("#sl_month").trigger('change');
    }

    $("#sl_group").on("select2:select", function() {
        $('#sl_training').attr("disabled",false);
        check_disable($(this).val());
        fecth_training($(this).val());
    });

    $("#sl_group").on("select2:unselecting", function(e) {
        $('#sl_branch').attr("disabled",false);
        $('#sl_training').attr("disabled",true);
        $("#sl_training").empty().select2({
            allowClear: true,
            placeholder: "กรุณาเลือกประเภท"
        });
    });

    //กำหนด placeholder ในช่องค้นหาใน select2
    $('#sl_group').one('select2:open', function(e) {
        $('input.select2-search__field').prop('placeholder', 'กรอกประเภท');
    });
    $('#sl_training').one('select2:open', function(e) {
        $('input.select2-search__field').prop('placeholder', 'กรอกหลักสูตรที่ต้องการ');
    });

    $('#sl_branch').one('select2:open', function(e) {
        $('input.select2-search__field').prop('placeholder', 'กรอกเขตพื้นที่');
    });

    $('#sl_month').one('select2:open', function(e) {
        $('input.select2-search__field').prop('placeholder', 'กรอกเดือน');
    });

    //เมื่อกดช่องค้นหาจะมีพื้นหลังดำ
    $('select').on('select2:open', function(e) {
        $("#overlay").css("display", "block");
        $(".search_box").css("z-index", "95");
    });

    $("#overlay").on("click", function() {
        $(this).css("display", "none");
        $(".search_box").css("z-index", "0");
    });
});
