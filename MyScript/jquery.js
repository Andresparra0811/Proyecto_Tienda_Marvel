<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
let preveiwContainer = $('.products-preview');
let previewBox = preveiwContainer.find('.preview');

$('.products-container .product').click(function() {
    preveiwContainer.css('display', 'flex');
    let name = $(this).attr('data-name');
    previewBox.each(function() {
        let target = $(this).attr('data-target');
        if(name == target){
        $(this).addClass('active');
    }
    });
});

previewBox.find('.fa-times').click(function() {
    $(this).closest('.preview').removeClass('active');
    preveiwContainer.css('display', 'none');
    });