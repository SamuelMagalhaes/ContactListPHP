const modal = document.querySelector('.modal')
const btnAdd = document.querySelector('.add-button')
const btnClose = document.querySelector('.btn-close-modal')

btnAdd.addEventListener('click', () => {
  modal.classList.remove('disabled')
  modal.classList.add('active')
})

btnClose.addEventListener('click', () => {
  modal.classList.remove('active')
  modal.classList.add('disabled')
})

