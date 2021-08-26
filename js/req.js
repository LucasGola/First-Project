const express = require('express')

const app = express()
const port = 3000

app.set('view engine', 'ejs')

app.use('/views', express.static('views'))

app.use('/js', express.static('js'))
app.use('/css', express.static('css'))

app.use('/images', express.static('images'))
app.use('/styles', express.static('styles'))

app.get('/', (req, res) => {
  res.render('home', { title: 'Hey', message: 'Hello there!' })
})

app.get('/aboutme', (req, res) => {
  res.send('aboutme')
})

app.get('/projets', (req, res) => {
  res.send('projets')
})

app.get('/courses', (req, res) => {
  res.send('courses')
})

app.get('/contats', (req, res) => {
  res.send('contats')
})

app.post('/contats', (req, res) => {
  res.send('contats post')
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})