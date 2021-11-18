   const tablist = document.querySelector('.tab-list');
        const tabcon = document.querySelectorAll('.tab-content');
        tablist.addEventListener('click', (e) => {
          if(e.target.tagName == 'LI'){
            const targetPanel = document.querySelector(e.target.dataset.target);
            Array.from(tabcon).forEach((panel) => {
              if(panel == targetPanel){
                panel.classList.add('active');
              }else{
                panel.classList.remove('active');
              }
            });
          }
        });







