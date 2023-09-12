fetch('../data/services.json')
.then(response => response.json())
.then(data => {

    let i =0;
data.services.forEach(service => {
                    
                    const list = document.querySelector(".catalogue-container ul");
                    const tableRow = document.createElement('li');
                    tableRow.classList.add('table-row');
                    const titreDiv = document.createElement('div');
                    titreDiv.classList.add('titre-de-demande');
                    titreDiv.textContent = service.service;
                    console.log(titreDiv);

                    const catégorieDiv = document.createElement('div');
                    catégorieDiv.classList.add('catégorie');
                    catégorieDiv.textContent = service.catégorie;

                    const descriptionDiv = document.createElement('div');
                    descriptionDiv.classList.add('description');
                    descriptionDiv.textContent = service.description;
                    tableRow.innerHTML=
                    
                    `
                    <div class="col col-1"><i class="fa-solid fa-briefcase"></i></div>
                    <div class="col col-2" id="col2-${i}" >     
                    </div>
                    <div class="col col-3" > <a  href="demandeDeService.php?titre=${service.service}&catégorie=${service.catégorie}&description=${service.description}" >   <button class="demander-button">Demander le service</button></a>            
                    </div>
                    `;

                    list.append(tableRow);
                    let col2 =document.getElementById(`col2-${i}`);
                    console.log(col2);
                    col2.appendChild(titreDiv);
                    col2.appendChild(catégorieDiv);
                    col2.appendChild(descriptionDiv);
                    list.appendChild(tableRow);
                    i++;
                });
            })
            .catch(error => console.error('Error fetching data:', error));



