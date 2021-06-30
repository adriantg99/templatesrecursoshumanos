
function autocompletar(){
    const inputBusquedaPDF = document.querySelector('#BusquedaPDF');
    let indexFocus = -1;

    inputBusquedaPDF.addEventListener('input', function(){
        const tipoRFC = this.value;

        if(!tipoRFC) return false;

        cerrarLista();

        //crear la lista de sugerencias
        const divList = document.createElement('div');
        divList.setAttribute('id', this.id + '-lista-autocompletar');
        divList.setAttribute('class', 'lista-autocompletar-items');
        this.parentNode.appendChild(divList);

        //conexion a base de datos
        httpRequest('controller.php?BusquedaPDF=' + tipoRFC, function(){
            const arreglo = JSON.parse(this.responseText);
            if(arreglo.length==0) return false;
                arreglo.forEach(item => {
                    if(item.substr(0, tipoRFC.length) == tipoRFC){
                        const elementoLista = document.createElement('div');
                        elementoLista.innerHTML =  `<strong>${item.substr(0,tipoRFC.length)}</strong>${item.substr(tipoRFC.length)}`;
                        elementoLista.addEventListener('click', function(){
                        inputBusquedaPDF.value = this.innerText;
                        cerrarLista();
                        return false;
                    })
                    divList.appendChild(elementoLista);
                }
            });
        });
    });

        //Validar arreglo vs input
        

    inputBusquedaPDF.addEventListener('keydown', function(e){
        const divList = document.querySelector('#' + this.id + '-lista-autocompletar');
        let items;

        if(divList){
            items = divList.querySelectorAll('div'); 

            switch (e.keyCode) {
                case 40: //abajo
                    indexFocus++;
                    if(indexFocus > items.length-1) indexFocus = items.length - 1;
                    break;
                case 38: //arriba
                    indexFocus--;
                    if(indexFocus < 0) indexFocus = 0;
                    break;
                case 13: //enter
                    e.preventDefault();
                    items[indexFocus].click();
                    indexFocus = -1;
                    break;
                default:
                    break;
            }
            seleccionar(items, indexFocus);
            return false;
        }
    });

    document.addEventListener('click', function(){
        cerrarLista();
    });

}

function seleccionar(lista, indexFocus){
    if(!lista || indexFocus == -1) return false;
    lista.forEach(x =>{x.classList.remove('autocompletar-active')});
    lista[indexFocus].classList.add("autocompletar-active");
}

function cerrarLista(){
    const items = document.querySelectorAll(".lista-autocompletar-items");
    items.forEach(item =>{item.parentNode.removeChild(item);});
    indexFocus = -1;
}


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open('GET', url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }

}


autocompletar();




