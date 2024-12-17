(function () {

  const classes = {
    active: 'is-active',
    visible: 'is-visible',
  };

  const selectors = {
    menu: '[data-js="menu"]',
    btnMenu: '[data-js="btn-menu"]',
  };

  const init = () => {
    const btn = document.querySelector(selectors.btnMenu);
    btn.addEventListener("click", toggle, false);
  };

  const toggle = function(){
    const menu = document.querySelector(selectors.menu);
    menu.classList.toggle(classes.visible);

    const btn = document.querySelector(selectors.btnMenu);
    btn.classList.toggle(classes.active);
  };

  init();
  
})();