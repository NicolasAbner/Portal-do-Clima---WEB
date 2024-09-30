// ACORDEÃO HOME

function acordeon() {
  var acc = document.getElementsByClassName("accordion")
  var i

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active")
      var panel = this.nextElementSibling
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px"
      }
    })
  }
}

// MENU
const buttonMenu = document.querySelector(".button-menu")
const overlay = document.querySelector(".overlay")
const sideMenu = document.querySelector(".side-menu")

function openSideMenu() {
  overlay.classList.toggle("menu-active")
  sideMenu.classList.toggle("menu-active")
  document.querySelector("body").style.overflow = "hidden"
}

function closeSideMenu() {
  overlay.classList.toggle("menu-active")
  sideMenu.classList.toggle("menu-active")
  document.querySelector("body").style.overflow = "auto"
}

buttonMenu.addEventListener("click", (e) => {
  openSideMenu()
})

document.addEventListener("click", (e) => {
  if (e.target == overlay) {
    closeSideMenu()
  }
})

document.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", (e) => {
    closeSideMenu()
  })
})


