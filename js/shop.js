
const favIcon = document.querySelectorAll(".favIcon");
favIcon.forEach(f => {
    f.addEventListener("click", () => {
        f.classList.toggle("active");
    });
});


const card = document.querySelectorAll(".Card");
const inp = document.querySelector(".search-input");
const button = document.querySelector(".search-btn");

//if we click the button
button.addEventListener("click", performSearch);

//if we press enter
inp.addEventListener("keypress", function(e) {
    if (e.key === "Enter") performSearch();
    resultCount.style.display='none'
});

//the function the listeners call
function performSearch() {
    let match = false;
    const val = inp.value.toLowerCase();
   
    card.forEach(c => {
        const type = c.querySelector(".type").textContent.toLowerCase();
        if (type.includes(val)) {
            c.style.display = "block";
            match = true;
        } else {
            c.style.display = "none";
        }
    });

    noMatchMsg.style.display = match ? "none" : "block";
}




const tags = document.querySelectorAll('.tag');
tags.forEach(tag => {
    tag.addEventListener('click', function() {
       
        tags.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        const category = this.textContent;
        filterProductsByCategory(category);
    });
});



function filterProductsByCategory(category) {
    const allCards = document.querySelectorAll('.Card');
    let visibleCount = 0;
    
    allCards.forEach(card => {
        const type = card.querySelector('.type').textContent;
        
      
        if (category === 'All Products') {
            card.style.display = 'block';
            visibleCount++;
            return;
        }
        
       
        if (category === 'Living Room') {
            
            if (type.includes('Couch') || type.includes('Table') || type.includes('Lamp')) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        } 
        else if (category === 'Bedroom') {
            if (type.includes('Bed') || type.includes('Bedroom')) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
        else if (category === 'Kitchen') {
            if (type.includes('Kitchen') || type.includes('Table Decor') || type.includes('Plates')) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
        else if (category === 'Office') {
            if (type.includes('Office') || type.includes('Desk')) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
        else if (category === 'Decor') {
            if (type.includes('Decor') || type.includes('Art') || type.includes('Vase') || type.includes('Candels')) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
        else if (category === 'Lighting') {
            if (type.includes('Lamp')) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
        else if (category === 'On Sale') {
            
            const saleBadge = card.querySelector('.sale') || card.querySelector('.left');
            if (saleBadge) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
     
        else if (type === category) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    
   
    const resultCount = document.querySelector('.result-count');
    if (resultCount) {
        resultCount.textContent = visibleCount+'  products found'


        button.addEventListener("click",()=>{
            resultCount.style.display='none';
        })

    }
 

}

