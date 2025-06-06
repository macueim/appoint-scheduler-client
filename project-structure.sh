#!/bin/bash

# Create main directories
mkdir -p public/{images,fonts}
mkdir -p src/{components,pages,styles,scripts}
mkdir -p config
mkdir -p dist

# Create files in public directory
touch public/favicon.ico

# Create files in src directory
touch src/index.html
touch src/styles/{tailwind.css,custom.css}
touch src/scripts/{main.js,alpine.js}

# Create config files
touch config/tailwind.config.js

# Create root level files
touch .gitignore
touch package.json
touch README.md

# Output success message
echo "Project structure created successfully!"