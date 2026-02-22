ThunderCode Laravel Starter Kit

🌟 Philosophy

ThunderCode Starter Kit is built with clean architecture and scalable patterns in mind. It is designed for developers and freelancers who want a ready-to-use Laravel foundation for small business websites, portfolios, or custom projects. Key Principles: Controllers coordinate, Services handle logic – Controllers are clean, while the business logic is centralized in the Services layer. FormRequest for validation – All input validation is separated from controllers, keeping code maintainable. Centralized Service layer – Handles CRUD operations, file uploads, and any additional business logic. Scalable & extendable – Easy to add new modules following the same pattern.

📂 Folder Structure

app/ contains Models, Services (business logic), Actions (optional single-operation classes), Http/Controllers (coordinate requests), Http/Requests (FormRequest validation classes). Resources/views/admin/services contains CRUD views for Service module.

⚡ Features

Fully functional Service CRUD module – title, description, price, and image upload. Clean Service Layer for business logic. FormRequest validation for secure input handling. Flash messages for user feedback. Modular and ready to extend with new features.

🚀 Quick Start

Clone the repository: git clone https://github.com/AnnaMmcc/thundercode-starter.git

Install dependencies: composer install, npm install, npm run dev

Configure .env file (DB, storage, etc.)

Run migrations: php artisan migrate

Serve the project: php artisan serve

Access the admin panel: /admin/services

🛠 Usage Notes

Adding a new module: Create a new Eloquent model in app/Models, create a corresponding Service class in app/Services, add FormRequest classes for validation, create controller methods that call the Service, add Blade views for CRUD operations. File uploads: All uploaded images are stored in storage/app/public/services. Make sure your storage is linked: php artisan storage:link.

💡 Why use ThunderCode Starter Kit?

Saves hours of setup time for new Laravel projects. Provides a scalable, professional architecture. Easy to understand and extend for developers of any level. Perfect as a base for freelance or client projects.

## License
This product is licensed under the ThunderCode Commercial License.
See LICENSE.txt for details.

## Support

For questions or issues, contact: `thundercodeweb@gmail.com`
