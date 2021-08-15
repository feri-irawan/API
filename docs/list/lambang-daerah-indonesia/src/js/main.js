const apiTitle = document.getElementById('apiTitle')
const strings = ['Lambang Daerah Indonesia', 'Lambang Provinsi', 'Lambang Kabupaten', 'Enjoy!']

const typed = new Typed(apiTitle, {
  typeSpeed: 70,
  loop: true,
  strings: [strings[0], strings[1], strings[2], strings[3]],
})

// Form Provinsi
selectOptionDatas('province', '#province')
outputSymbol('province')

// const formProvince = document.querySelector('#form-province form')
// formProvince.onsubmit = (e) => {
//   e.preventDefault()

//   const index = e.target.elements.province.value
//   const size = e.target.elements['province-size'].value
//   console.log(size)

//   const url = `https://feriirawan-api.herokuapp.com/list/symbols/province/${index}/${size}`

//   const provinceSymbol = document.getElementById('province-symbol')
//   const provinceLink = document.getElementById('province-link')

//   provinceSymbol.src = url
//   provinceLink.value = url
// }

// Form regency
selectOptionDatas('regency', '#regency')
outputSymbol('regency')

// Membuat output lambang dan link lambang jika form disubmit
function outputSymbol(selector) {
  const form = document.querySelector(`#form-${selector} form`)
  form.onsubmit = (e) => {
    e.preventDefault()

    let btnGetSymbol = e.target.elements[2]

    btnGetSymbol.innerHTML += `
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
      </svg>`

    let title, size

    switch (selector) {
      case 'province':
        title = JSON.parse(e.target.elements.province.value)[0].value
        size = e.target.elements['province-size'].value
        break

      case 'regency':
        title = JSON.parse(e.target.elements.regency.value)[0].value
        size = e.target.elements['regency-size'].value
        break

      default:
        break
    }

    fetch(`https://feriirawan-api.herokuapp.com/list/symbols/${selector}/200`)
      .then((response) => response.json())

      .then((response) => {
        console.log('Success')
        const datas = response.lambang

        datas.forEach((data) => {
          if (title === data.title) {
            const index = data.index

            const url = `https://feriirawan-api.herokuapp.com/list/symbols/${selector}/${index}/${size}`

            console.log(url)
            const symbolContainer = document.getElementById(`${selector}-symbol`)
            const symbolLinkInput = document.getElementById(`${selector}-link-input`)
            const symbolAnchor = document.getElementById(`${selector}-link`)

            symbolContainer.src = url
            symbolLinkInput.value = url
            symbolAnchor.href = url
            symbolAnchor.target = '_blank'

            btnGetSymbol.innerHTML = `Dapatkan Lambang`
          }
        })
      })
  }
}

// Mengambil daftar option untuk input select
function selectOptionDatas(data, selector) {
  fetch(`https://feriirawan-api.herokuapp.com/list/symbols/${data}/200`)
    .then((response) => response.json())

    .then((response) => {
      console.log(`Sukses mengambil data ${data}`)
      const datas = response.lambang
      const selectInput = document.querySelector(selector)

      let list = []
      datas.forEach((data) => {
        list.push(data.title)
      })

      new Tagify(selectInput, {
        mode: 'select',
        whitelist: list,
        keepInvalidTags: true,
      })
    })

    .catch((err) => {
      console.log(`Sukses mengambil data ${data}`)
    })
}

// Clipboard
copy('.btn-copy')

function copy(selector) {
  const clipboard = new ClipboardJS(selector)
  clipboard.on('success', function (e) {
    e.trigger.classList.remove('btn-outline-secondary')
    e.trigger.classList.add('btn-outline-success')

    e.trigger.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
      </svg>`

    e.clearSelection()
  })

  clipboard.on('error', function (e) {
    e.trigger.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-danger" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
      </svg>`
  })
}
