import AOS from 'aos';

const aosInit = new AOS.init({
  once: true,
  duration: 1000
});

export default aosInit;
