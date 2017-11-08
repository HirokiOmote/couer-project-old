import AOS from 'aos';
// import slick from './slick';

const aosInit = new AOS.init({
  once: true,
  duration: 1000,
  offset: 300,
  startEvent: 'load'
});

export default aosInit;
