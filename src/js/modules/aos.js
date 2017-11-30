import AOS from 'aos';

const aosInit = new AOS.init({
  once: true,
  duration: 800,
  offset: 300,
  delay: 150,
  startEvent: 'load'
});

export default aosInit;
