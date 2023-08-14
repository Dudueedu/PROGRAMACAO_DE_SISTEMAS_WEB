let getHours = () => {
    let clock = document.getElementsByClassName('clock')[0]
    let date = new Date()
    let hours = date.getHours()
    let minutes = date.getMinutes()
    let seconds = date.getSeconds()
    let hour = hours < 10 ? `0${hours}` : hours
    let minute = minutes < 10 ? `0${minutes}` : minutes
    let second = seconds < 10 ? `0${seconds}` : seconds
    clock.innerHTML = `${hour}:${minute}:${second}`
  }
  
  setInterval(() => {
    getHours()
  }, 1000)

