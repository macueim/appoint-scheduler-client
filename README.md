# AppointScheduler - Small Business Appointment Management System

![AppointScheduler Logo](public/images/logo.png)

## Overview

AppointScheduler is a modern, intuitive appointment scheduling platform designed specifically for local entrepreneurs such as barbers, stylists, consultants, and tutors. This frontend application provides a streamlined interface for both business owners and clients to manage appointments efficiently.

## MVP Features

- **Business Profile Management**: Create and customize business profiles with services, hours, and location
- **Service Catalog**: Define and manage offered services with pricing, duration, and availability
- **Appointment Scheduling**: Interactive calendar for booking, rescheduling, and canceling appointments
- **Client Management**: Store and manage client information and appointment history
- **Notifications**: Email/SMS reminders for upcoming appointments
- **Responsive Design**: Fully accessible on desktop and mobile devices
- **Basic Analytics**: Simple reports on appointment volume and service popularity

## User Stories

### For Business Owners

- As a business owner, I want to create a profile for my business so clients can find my services
- As a business owner, I want to define my service offerings with prices and durations
- As a business owner, I want to set my availability so clients can only book during my working hours
- As a business owner, I want to view all upcoming appointments in a calendar view
- As a business owner, I want to manage client information and appointment history
- As a business owner, I want to receive notifications for new bookings

### For Clients

- As a client, I want to search for businesses by service type or location
- As a client, I want to view available time slots for a specific service
- As a client, I want to book appointments without creating an account
- As a client, I want to receive confirmation and reminders for my appointments
- As a client, I want to reschedule or cancel my appointments
- As a client, I want to view my appointment history

## Data Model

### Business
- ID
- Name
- Description
- Contact information (phone, email, address)
- Business hours
- Service categories

### Service
- ID
- Business ID (foreign key)
- Name
- Description
- Duration
- Price
- Availability (days/times offered)

### Appointment
- ID
- Service ID (foreign key)
- Client ID (foreign key)
- Date and time
- Status (confirmed, completed, canceled)
- Notes

### Client
- ID
- Name
- Email
- Phone
- Appointment history

## Technology Stack

- **HTML5**: Modern markup structure
- **Tailwind CSS**: Utility-first CSS framework for styling
- **Alpine.js**: Lightweight JavaScript framework for client-side interactivity
- **Font Awesome**: Icon library for enhanced UI elements

## Getting Started

### Prerequisites

- Web browser (Chrome, Firefox, Safari, Edge recommended)
- Basic understanding of HTML, CSS, and JavaScript

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/appoint-scheduler-client.git
   cd appoint-scheduler-client
   ```

2. Open the project in your preferred code editor

3. Launch the application by opening `index.html` in your web browser

### Development

This is a frontend-only project using CDN-linked resources (Tailwind CSS and Alpine.js), so no build steps are required for basic development. Simply edit the HTML, CSS, and JavaScript files directly.

For a more advanced setup with custom builds:

1. Install Node.js and npm if not already installed
2. Run `npm install` to install development dependencies
3. Use `npm run dev` to start a local development server

## Usage

### For Business Owners

1. Create an account as a service provider
2. Set up your business profile with services, pricing, and availability
3. Manage incoming appointment requests
4. View your schedule and client information

### For Clients

1. Search for services or browse available businesses
2. Select a service and view available time slots
3. Book an appointment by providing your information
4. Receive confirmation with appointment details
5. Manage or reschedule your appointments as needed

## Browser Support

The application is compatible with:
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Future Enhancements

- Online payment processing
- Staff management for businesses with multiple service providers
- Advanced analytics and reporting
- Mobile application
- Two-way calendar synchronization with Google Calendar and Outlook

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

For any inquiries or support needs, please contact:
- Email: support@appointscheduler.com
- Website: https://appointscheduler.com

---

© 2025 AppointScheduler. All rights reserved.