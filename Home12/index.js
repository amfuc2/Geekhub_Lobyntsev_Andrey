function plus (a, b) {
  return a + b
}

function minus (a, b) {
  return a - b
}

function multiply (a, b) {
  return a * b
}

function division (a, b) {
  if (b == 0) {
    alert('0 cannot be divided')
  }
  else {
    return a / b
  }
}

function power (a, b) {
  let i, c = a
  for (i = 1; i <= b; i++) {
    c = a * c
  }
  return c
}

function radical (a, b) {
  let c
  c = Math.pow(a, 1 / b)
  return c
}

function Sine (a) {
  let c
  c = Math.sin(a)
  return c
}

function Cosine (a) {
  let c
  c = Math.cos(a)
  return c
}

function Factorial (a) {
  let i, S = 1
  for (i = 1; i <= a; i++) {
    S = S * i
  }
  return S
}
