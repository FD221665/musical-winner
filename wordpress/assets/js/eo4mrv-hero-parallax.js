(() => {
  const hero = document.querySelector('.eo4mrv-hero');
  const content = document.querySelector('.eo4mrv-hero-content');

  if (!hero || !content) {
    return;
  }

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (prefersReducedMotion) {
    hero.style.backgroundAttachment = 'scroll';
    content.style.transform = 'none';
    return;
  }

  const isMobile = window.matchMedia('(max-width: 767px)').matches;
  const maxOffset = isMobile ? 30 : 60;

  const onScroll = () => {
    const scrollY = window.scrollY || window.pageYOffset;
    const y = Math.min(scrollY * 0.2, maxOffset);

    hero.style.backgroundPosition = `center calc(50% + ${y}px)`;
    content.style.transform = `translate3d(0, ${y * 0.15}px, 24px)`;
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
