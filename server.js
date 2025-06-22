const express = require('express');
const app = express();
const port = process.env.PORT || 3000;

app.use(express.json());

app.get('/', (req, res) => {
  res.send('Welcome to the E-Commerce Site!');
});

app.get('/admin', (req, res) => {
  // simple placeholder admin panel
  res.send('Admin panel: manage products, categories, orders etc.');
});

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
