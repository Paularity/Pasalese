const tabs = document.querySelector('.tabs');
const panels = document.querySelectorAll('.panel');


tabs.addEventListener('click', (el) => {
  if(el.target.tagName == 'LI'){
    const targetPanel = document.querySelector(el.target.dataset.target);
    Array.from(panels).forEach((panel) => {
      if(panel == targetPanel){
        panel.classList.add('active');
      }else{
        panel.classList.remove('active');
      }
    });
  }
});



const tab = document.querySelector('.tab');
const panel1 = document.querySelectorAll('.panel1');
tab.addEventListener('click', (e) => {
  if(e.target.tagName == 'LI'){
    const targetPanel = document.querySelector(e.target.dataset.target);
    Array.from(panel1).forEach((panel) => {
      if(panel == targetPanel){
        panel.classList.add('active');
      }else{
        panel.classList.remove('active');
      }
    });
  }
});

