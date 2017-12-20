$(function() {
  $('#edit').click(function() {
    var page = window.location.pathname.substring(1);
    window.location.href = 'https://github.com/conreality/wiki.conreality.org/edit/master/' + page + '.rst';
  });
  $('h1, h2, h3, h4, h5, h6').each(function() {
    var self = $(this);
    self.attr('id', self.text().replace(' ', '-'));
  });
});
