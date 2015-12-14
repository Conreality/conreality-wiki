$(function() {
  $('#edit').click(function() {
    var page = window.location.pathname.substring(1);
    window.location.href = 'https://github.com/conreality/wiki.conreality.org/edit/master/' + page + '.md';
  });
});
