// topmenu collapsed
$('#bs-navbar-collapse-1').on('show.bs.collapse', function () {
  $('#bs-navbar-collapse-1').append($('#bs-navbar-collapse-2').html());
 $('#bs-navbar-collapse-1 ul').removeClass('navbar-nav');
});

$('#bs-navbar-collapse-1').on('hidden.bs.collapse', function () {
  $('#bs-navbar-collapse-1 ul:last-child').remove();
  //$('#bs-navbar-collapse-1 ul').last().addClass('navbar-nav');
});

$(window).on('resize', function () {
  if (window.innerWidth > 768) {$('#bs-navbar-collapse-1').collapse('hide');}
});