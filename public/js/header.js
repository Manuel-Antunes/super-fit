document.body.onload = function () {
  $("#profile").sideNav({
    menuWidth: 300,
    edge: 'right',
    closeOnClick: true,
    draggable: true,
    onOpen: function (el) { },
    onClose: function (el) { },
  });
}
