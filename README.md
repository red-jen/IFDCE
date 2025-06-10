# IFDCE Website (developed by REDA JENHAJI)

A modern, full-stack website for the Institute of Training, Skills Development and Excellence (IFDCE) built with Vite, React, and a robust backend API.

## 🚀 Features

- **Modern UI/UX**: Clean, professional design showcasing IFDCE's educational programs
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **Fast Performance**: Built with Vite for lightning-fast development and production builds
- **Interactive Components**: Dynamic course catalogs, program information, and contact forms
- **Multi-language Support**: French and English content support
- **SEO Optimized**: Meta tags and structured data for better search visibility
- **RESTful API**: Comprehensive backend API for data management
- **Authentication & Authorization**: Secure user management system
- **Database Integration**: Persistent data storage with relational database
- **Admin Dashboard**: Content management system for administrators

## 🛠️ Tech Stack

### Frontend
- **Framework**: React 18
- **Build Tool**: Vite
- **Styling**: CSS3 / Tailwind CSS
- **Icons**: Lucide React
- **State Management**: React Context / Redux Toolkit
- **HTTP Client**: Axios

### Backend
- **Runtime**: Node.js
- **Framework**: Express.js
- **Database**: PostgreSQL / MySQL
- **ORM**: Prisma / Sequelize
- **Authentication**: JWT (JSON Web Tokens)
- **Validation**: Joi / Zod
- **File Upload**: Multer
- **Email Service**: Nodemailer

### DevOps & Deployment
- **Frontend Deployment**: Vercel / Netlify
- **Backend Deployment**: Railway / Heroku / Digital Ocean
- **Database Hosting**: PlanetScale / Supabase
- **CI/CD**: GitHub Actions

## 📋 Prerequisites

- Node.js (version 16 or higher)
- npm or yarn package manager
- PostgreSQL or MySQL database
- Git

## 🚀 Getting Started

### Full Stack Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/ifdce-website.git
cd ifdce-website
```

2. Install frontend dependencies:
```bash
npm install
# or
yarn install
```

3. Install backend dependencies:
```bash
cd backend
npm install
# or
yarn install
```

4. Set up environment variables:
```bash
# Frontend (.env)
VITE_API_URL=http://localhost:3001/api
VITE_CONTACT_EMAIL=contact@ifdce.com
VITE_GOOGLE_ANALYTICS_ID=your_ga_id

# Backend (backend/.env)
DATABASE_URL=postgresql://user:password@localhost:5432/ifdce_db
JWT_SECRET=your_jwt_secret_key
JWT_EXPIRES_IN=7d
EMAIL_HOST=smtp.gmail.com
EMAIL_PORT=587
EMAIL_USER=your_email@gmail.com
EMAIL_PASS=your_email_password
CLOUDINARY_NAME=your_cloudinary_name
CLOUDINARY_API_KEY=your_api_key
CLOUDINARY_API_SECRET=your_api_secret
```

5. Set up the database:
```bash
cd backend
npm run db:migrate
npm run db:seed
```

6. Start the backend server:
```bash
cd backend
npm run dev
```

7. Start the frontend development server:
```bash
cd ..
npm run dev
```

8. Open your browser and navigate to `http://localhost:5173`

## 📝 Available Scripts

### Frontend Scripts
- `npm run dev` - Start development server
- `npm run build` - Build for production
- `npm run preview` - Preview production build locally
- `npm run lint` - Run ESLint for code quality
- `npm run lint:fix` - Fix ESLint issues automatically

### Backend Scripts
- `npm run dev` - Start development server with nodemon
- `npm run start` - Start production server
- `npm run test` - Run test suite
- `npm run db:migrate` - Run database migrations
- `npm run db:seed` - Seed database with initial data
- `npm run db:reset` - Reset database

## 📁 Project Structure

```
ifdce-website/
├── public/
│   ├── images/
│   └── favicon.ico
├── src/
│   ├── components/
│   │   ├── common/
│   │   ├── sections/
│   │   └── ui/
│   ├── pages/
│   ├── services/
│   │   └── api.js
│   ├── hooks/
│   ├── context/
│   ├── utils/
│   ├── App.jsx
│   └── main.jsx
├── backend/
│   ├── src/
│   │   ├── controllers/
│   │   ├── models/
│   │   ├── routes/
│   │   ├── middleware/
│   │   ├── utils/
│   │   ├── config/
│   │   └── app.js
│   ├── prisma/
│   │   ├── migrations/
│   │   ├── seeds/
│   │   └── schema.prisma
│   ├── tests/
│   └── server.js
├── package.json
└── vite.config.js
```

## 🔌 API Endpoints

### Authentication
- `POST /api/auth/register` - User registration
- `POST /api/auth/login` - User login
- `POST /api/auth/logout` - User logout
- `GET /api/auth/me` - Get current user

### Programs & Courses
- `GET /api/programs` - Get all programs
- `GET /api/programs/:id` - Get program by ID
- `POST /api/programs` - Create new program (Admin)
- `PUT /api/programs/:id` - Update program (Admin)
- `DELETE /api/programs/:id` - Delete program (Admin)

### Contact & Inquiries
- `POST /api/contact` - Submit contact form
- `GET /api/inquiries` - Get all inquiries (Admin)
- `PUT /api/inquiries/:id` - Update inquiry status (Admin)

### Users & Admin
- `GET /api/users` - Get all users (Admin)
- `GET /api/users/:id` - Get user by ID
- `PUT /api/users/:id` - Update user profile
- `DELETE /api/users/:id` - Delete user (Admin)

## 🎨 Key Components

### Frontend Components
- **Header**: Navigation with IFDCE logo and menu
- **Hero Section**: Main banner with call-to-action
- **Programs**: Showcase of diploma and certification programs
- **About**: Institution presentation and mission
- **Services**: VAE, online training, and consulting services
- **Contact**: Contact form and institution information
- **Footer**: Links and additional information
- **Admin Dashboard**: Content management interface

### Backend Components
- **Authentication Middleware**: JWT token validation
- **Error Handling**: Centralized error management
- **Validation Middleware**: Request data validation
- **File Upload**: Image and document handling
- **Email Service**: Automated email notifications
- **Database Models**: User, Program, Inquiry, Admin models

## 🌐 Deployment

### Frontend Deployment (Vercel)

```bash
npm run build
vercel --prod
```

### Backend Deployment (Railway)

1. Create a Railway account and new project
2. Connect your GitHub repository
3. Set environment variables in Railway dashboard
4. Deploy automatically on push to main branch

### Database Setup (PlanetScale)

1. Create a PlanetScale database
2. Get connection string
3. Update DATABASE_URL in environment variables
4. Run migrations in production

## 🔧 Configuration

### Environment Variables

Frontend (`.env`):
```env
VITE_API_URL=https://your-backend-url.com/api
VITE_CONTACT_EMAIL=contact@ifdce.com
VITE_GOOGLE_ANALYTICS_ID=your_ga_id
```

Backend (`backend/.env`):
```env
NODE_ENV=production
PORT=3001
DATABASE_URL=your_database_connection_string
JWT_SECRET=your_super_secret_jwt_key
JWT_EXPIRES_IN=7d
EMAIL_HOST=smtp.gmail.com
EMAIL_PORT=587
EMAIL_USER=your_email@gmail.com
EMAIL_PASS=your_app_password
CLOUDINARY_NAME=your_cloudinary_name
CLOUDINARY_API_KEY=your_api_key
CLOUDINARY_API_SECRET=your_api_secret
CORS_ORIGIN=https://your-frontend-url.com
```

## 🧪 Testing

### Frontend Testing
```bash
npm run test
npm run test:coverage
```

### Backend Testing
```bash
cd backend
npm run test
npm run test:watch
npm run test:coverage
```

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Team

- **Project Lead & Full-Stack Developer**: REDA JENHAJI
- **Frontend Developer**: [Developer Name]
- **Backend Developer**: [Developer Name]
- **UI/UX Designer**: [Designer Name]
- **DevOps Engineer**: [DevOps Name]

## 📞 Support

For support and questions:
- Email: dev@ifdce.com
- Website: [IFDCE Official Website]
- Issues: [GitHub Issues](https://github.com/yourusername/ifdce-website/issues)

## 🎯 Roadmap

### Phase 1 (Current)
- [x] Frontend implementation
- [x] Backend API development
- [x] Database design
- [x] Authentication system

### Phase 2 (In Progress)
- [ ] Student portal integration
- [ ] Course enrollment system
- [ ] Payment gateway integration
- [ ] Admin dashboard enhancement

### Phase 3 (Upcoming)
- [ ] Multi-language content management
- [ ] Advanced search functionality
- [ ] Mobile app companion
- [ ] Real-time notifications
- [ ] Advanced analytics dashboard

---

Built with ❤️ for IFDCE - Making excellence accessible to everyone, everywhere.