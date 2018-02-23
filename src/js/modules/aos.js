import AOS from 'aos';

const aosInit = new AOS.init({
  once: true,
  duration: 800,
  delay: 150
});

export default aosInit;
