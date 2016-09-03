var inst = $('[data-remodal-id=modal]').remodal();
var CSRF_TOKEN = $('input[name=_token]').val();

$('.select_row').click(function () {

    var id = $(this).children('.row_id').text();
    var date = $(this).children('.row_date').text();
    var time = $(this).children('.row_time').text();
    var price = $(this).children('.row_price').text();
    var firstname = $(this).children('.row_firstname').text();
    var lastname = $(this).children('.row_lastname').text();
    if (lastname == '') lastname = '-';
    var phone = $(this).children('.row_phone').text();
    var email = $(this).children('.row_email').text();
    if (email == '') email = '-';

    $('.remodal_id').text(id);
    $('.remodal_data span').text(date);
    $('.remodal_time span').text(time);
    $('.remodal_price span').text(price);
    $('.remodal_firstname span').text(firstname);
    $('.remodal_lastname span').text(lastname);
    $('.remodal_phone span').text(phone);
    $('.remodal_email span').text(email);

    inst.open();
});

$('.remodal-cancel').click(function () {
    var id = $('.remodal_id').text();

    $.post('admin/delete', {_token: CSRF_TOKEN, id: id}, function (data) {
        if (data == 'success') {
            $('#row-id-' + id).hide();
        }
    });
});

$('.main-table').DataTable({
    'scrollY': '100%',
    "scrollCollapse": true,
    "paging": false
});

$('.calendar-table').DataTable({
    'responsive': true,
    "paging": true,
    'pageLength': 20
});

$('.second-table').removeClass('active').removeClass('');

$('.old-table').DataTable({
    "paging": true,
    'pageLength': 20
});

var el = document.getElementById('items');
Sortable.create(el,{
    'animation' : 500,
    store: {
        /**
         * Get the order of elements. Called once during initialization.
         * @param   {Sortable}  sortable
         * @returns {Array}
         */
        get: function (sortable) {
            var order = localStorage.getItem(sortable.options.group.name);
            return order ? order.split('|') : [];
        },

        /**
         * Save the order of elements. Called onEnd (when the item is dropped).
         * @param {Sortable}  sortable
         */
        set: function (sortable) {
            var order = sortable.toArray();
            var jsonString = JSON.stringify(order);
            $.post('topslider/order', {_token: CSRF_TOKEN, data: jsonString});
        }
    }
});

$('.delete_image_top').click(function () {
    var id = $(this).data('id');
    $.post('topslider/delete', {_token: CSRF_TOKEN, id: id}, function (data) {
        if(data == 'success'){
            $('#image-'+id).remove();
        }
    });
});

$('.delete_image_mid').click(function () {
    var id = $(this).data('id');
    $.post('midslider/delete', {_token: CSRF_TOKEN, id: id}, function (data) {
        if(data == 'success'){
            $('#image-'+id).remove();
        }
    });
});
