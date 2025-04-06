const express = require('express');
const app = express();
const PORT = 3000;

// Sample job data
const jobs = [
    {
        title: "Santa Bai",
        description: "A professional experienced maid with 10 years of experience.",
        image: "maid.jpg",
        link: "maid.html"
    },
    {
        title: "Aman Kumar",
        description: "Experienced household worker with 5 years of working experience.",
        image: "driver.jpg",
        link: "driver.html"
    },
    {
        title: "Vilota Thackerey",
        description: "Good cook with household cleaning experience of 5 years.",
        image: "cook.jpg",
        link: "cook.html"
    },
    {
        title: "Kanta Boro",
        description: "Good maid with the best experience from Mother Teresa School of Nursing.",
        image: "babysitter.jpg",
        link: "babysitter.html"
    },
    {
        title: "Ramu Kaka",
        description: "Skilled gardeners to maintain and beautify your garden or lawn.",
        image: "gardener.jpg",
        link: "gardener.html"
    },
    {
        title: "Other Services",
        description: "Explore a variety of other services tailored to your needs.",
        image: "others.jpg",
        link: "others.html"
    }
];

// Serve static files (e.g., images, CSS)
app.use(express.static('public'));

// Route to serve the job page
app.get('/', (req, res) => {
    let jobCards = jobs.map(job => `
        <div class="job-card">
            <img src="${job.image}" alt="${job.title}" class="job-image">
            <div class="job-content">
                <h3 class="job-title">${job.title}</h3>
                <p class="job-description">${job.description}</p>
                <a href="${job.link}" class="job-link">View Details</a>
            </div>
        </div>
    `).join('');

    res.send(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Job Applications</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f9f9f9;
                }
                .header {
                    background-color: #4CAF50;
                    color: white;
                    text-align: center;
                    padding: 20px;
                    font-size: 24px;
                }
                .container {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 20px;
                    padding: 20px;
                }
                .job-card {
                    background: white;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                    transition: transform 0.2s;
                }
                .job-card:hover {
                    transform: translateY(-5px);
                }
                .job-image {
                    width: 100%;
                    height: 150px;
                    object-fit: cover;
                }
                .job-content {
                    padding: 15px;
                }
                .job-title {
                    font-size: 18px;
                    font-weight: bold;
                    margin: 0 0 10px;
                }
                .job-description {
                    font-size: 14px;
                    color: #555;
                    margin: 0 0 15px;
                }
                .job-link {
                    display: inline-block;
                    text-decoration: none;
                    color: white;
                    background-color: #4CAF50;
                    padding: 10px 15px;
                    border-radius: 5px;
                    font-size: 14px;
                }
                .job-link:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <div class="header">Job Applications</div>
            <div class="container">
                ${jobCards}
            </div>
        </body>
        </html>
    `);
});

// Start the server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});