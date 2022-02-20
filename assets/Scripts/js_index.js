'use strict'

const lista = document.querySelectorAll('.lista')
const contenido = document.querySelectorAll('.contenidos')

lista.forEach( (cadaLista, i)=>{
    lista[i].addEventListener('click',()=>{ 

        lista.forEach( (cadaLista, i)=>{
            lista[i].classList.remove('active')
            contenido[i].classList.remove('active')
        })

        lista[i].classList.add('active')
        contenido[i].classList.add('active')

    })
})
