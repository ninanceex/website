window.sr = ScrollReveal({
  opacity: 0,
  easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
  distance: 0,
  viewFactor: 0.4,
  scale: 1,
  duration: 1200,
  mobile: false,
  rotate: { x: 0, y: 0, z: 0 }
});

if (!sr.tools.isMobile()) {
  document.documentElement.classList.add('sr-enabled');
  sr.reveal('.from-bottom', {
    distance: '-50px',
    origin: 'top'
  })
  sr.reveal('.topblock .fade-in-item', { viewFactor: 0 }, 100)
  // sr.reveal('.countdown', { viewFactor: 0 }, 100)
  sr.reveal('.technology .fade-in-item', { viewFactor: 0 }, 100)
  sr.reveal('.get-notified');
  sr.reveal('.feature-4');
  sr.reveal('.feature-1');
  sr.reveal('.trading-app');
  sr.reveal('.feature-2');
  sr.reveal('.big-title');
  sr.reveal('.send-request-body');
  sr.reveal('.roadmap .top');
  sr.reveal('.technology');
  sr.reveal('.team .member', {
    distance: '-50px',
    origin: 'top'
  }, 100);
  sr.reveal('.advisors .member', {
    distance: '-50px',
    origin: 'top'
  }, 100);
  sr.reveal('.pay-with-screen', {
    distance: '50px'
  }, 150)
  sr.reveal('.feature-3');
  sr.reveal('.media');
  sr.reveal('.footer');
  // sr.reveal('.milestone');
  sr.reveal('.footer-social .link', 50)
  sr.reveal('.background-icon', {
    scale: 0.1,
    easing: 'ease-in-out'
  });
  sr.reveal('.fade-in-left', {
    distance: '50px',
    origin: 'left'
  });
  sr.reveal('.fade-in-right', {
    distance: '50px',
    origin: 'right'
  });
  sr.reveal('.accordion-item', 100);
  sr.reveal('.powered-by-logos a', 100);
  sr.reveal('.distribution > *', 100);
  sr.reveal('.documentation_list a', 100);
  sr.reveal('.step-list li', 100);
}
