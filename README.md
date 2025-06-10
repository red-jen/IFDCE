# IFDCE Website (devloped by REDA JENHAJI)

A modern, responsive website for the Institute of Training, Skills Development and Excellence (IFDCE) built with Vite and React.

## 🚀 Features

- **Modern UI/UX**: Clean, professional design showcasing IFDCE's educational programs
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **Fast Performance**: Built with Vite for lightning-fast development and production builds
- **Interactive Components**: Dynamic course catalogs, program information, and contact forms
- **Multi-language Support**: French and English content support
- **SEO Optimized**: Meta tags and structured data for better search visibility

## 🛠️ Tech Stack

- **Frontend**: React 18
- **Build Tool**: Vite
- **Styling**: CSS3 / Tailwind CSS
- **Icons**: Lucide React
- **Deployment**: Vercel / Netlify

## 📋 Prerequisites

- Node.js (version 16 or higher)
- npm or yarn package manager

## 🚀 Getting Started

### Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/ifdce-website.git
cd ifdce-website
```

2. Install dependencies:
```bash
npm install
# or
yarn install
```

3. Start the development server:
```bash
npm run dev
# or
yarn dev
```

4. Open your browser and navigate to `http://localhost:5173`

## 📝 Available Scripts

- `npm run dev` - Start development server
- `npm run build` - Build for production
- `npm run preview` - Preview production build locally
- `npm run lint` - Run ESLint for code quality
- `npm run lint:fix` - Fix ESLint issues automatically

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
│   ├── styles/
│   ├── utils/
│   ├── App.jsx
│   └── main.jsx
├── package.json
└── vite.config.js
```

## 🎨 Key Components

- **Header**: Navigation with IFDCE logo and menu
- **Hero Section**: Main banner with call-to-action
- **Programs**: Showcase of diploma and certification programs
- **About**: Institution presentation and mission
- **Services**: VAE, online training, and consulting services
- **Contact**: Contact form and institution information
- **Footer**: Links and additional information

## 🌐 Deployment

### Build for Production

```bash
npm run build
```

The build files will be generated in the `dist/` directory.

### Deploy to Vercel

1. Install Vercel CLI:
```bash
npm install -g vercel
```

2. Deploy:
```bash
vercel --prod
```

### Deploy to Netlify

1. Build the project:
```bash
npm run build
```

2. Drag and drop the `dist/` folder to Netlify's deploy interface

## 🔧 Configuration

### Environment Variables

Create a `.env` file in the root directory:

```env
VITE_API_URL=your_api_url_here
VITE_CONTACT_EMAIL=contact@ifdce.com
VITE_GOOGLE_ANALYTICS_ID=your_ga_id
```

### Vite Configuration

The `vite.config.js` file includes:
- React plugin configuration
- Build optimizations
- Path aliases for cleaner imports

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

- **Project Lead**: [Your Name]
- **Frontend Developer**: [Developer Name]
- **UI/UX Designer**: [Designer Name]

## 📞 Support

For support and questions:
- Email: dev@ifdce.com
- Website: [IFDCE Official Website]
- Issues: [GitHub Issues](https://github.com/yourusername/ifdce-website/issues)

## 🎯 Roadmap

- [ ] Add student portal integration
- [ ] Implement course enrollment system
- [ ] Add payment gateway integration
- [ ] Multi-language content management
- [ ] Advanced search functionality
- [ ] Mobile app companion

---

Built with ❤️ for IFDCE - Making excellence accessible to everyone, everywhere.