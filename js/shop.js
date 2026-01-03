const favIcon = document.querySelectorAll(".favIcon");
favIcon.forEach(f => {
    f.addEventListener("click", () => {
        f.classList.toggle("active");
    });
});

const card = document.querySelectorAll(".Card");
const inp = document.querySelector(".search-input");
const button = document.querySelector(".search-btn");
const noMatchMsg = document.getElementById("noMatchMsg");
const resultCount = document.querySelector('.result-count');

button.addEventListener("click", performSearch);

inp.addEventListener("keypress", function(e) {
    if (e.key === "Enter") performSearch();
});

function performSearch() {
    let match = false;
    const val = inp.value.toLowerCase();
    let visibleCount = 0;
    
    card.forEach(c => {
        const type = c.querySelector(".type").textContent.toLowerCase();
        if (type.includes(val)) {
            c.style.display = "block";
            match = true;
            visibleCount++;
        } else {
            c.style.display = "none";
        }
    });

    if (noMatchMsg) {
        noMatchMsg.style.display = match ? "none" : "block";
    }
    
    if (resultCount) {
        resultCount.style.display = "block";
        resultCount.textContent = visibleCount + " products found";
    }
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
    noMatchMsg.style.display='none';
   
    allCards.forEach(card => {
        const type = card.querySelector('.type').textContent;
        
        if (category === 'All Products') {
            card.style.display = 'block';
            visibleCount++;
            
           
        }
        
      else  if (category === 'Living Room') {
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
            if (type.includes('Decor') || type.includes('Art') || type.includes('Vase') || type.includes('Candles')) {
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

     if(visibleCount==0){
        
    noMatchMsg.style.display='block'
    }
    
    
    if (resultCount) {
        resultCount.style.display = 'block';
        resultCount.textContent = visibleCount + ' products found';
    }
}



