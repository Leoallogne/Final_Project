irmabelle@irmas-MacBook-Pro Final_Project % tree
.
├── README.md
├── app
│   ├── Api
│   │   ├── ApiClient.php
│   │   ├── CloudinaryApiClient.php
│   │   └── GoogleApiClient.php
│   ├── Config
│   │   ├── AppConfig.php
│   │   └── Database.php
│   ├── Controllers
│   │   ├── ApprovalController.php
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── DivisionController.php
│   │   ├── DocumentController.php
│   │   ├── EventController.php
│   │   ├── NotificationController.php
│   │   ├── TaskController.php
│   │   └── TimelineController.php
│   ├── Core
│   │   ├── Auth.php
│   │   ├── Controller.php
│   │   ├── Model.php
│   │   ├── Router.php
│   │   └── View.php
│   ├── Helpers
│   │   ├── JwtHelper.php
│   │   ├── Response.php
│   │   ├── Utils.php
│   │   └── Validator.php
│   ├── Middleware
│   │   ├── AuthMiddleware.php
│   │   └── RoleMiddleware.php
│   ├── Models
│   │   ├── ActivityLog.php
│   │   ├── Approval.php
│   │   ├── Division.php
│   │   ├── Document.php
│   │   ├── DocumentVersion.php
│   │   ├── Event.php
│   │   ├── EventPhase.php
│   │   ├── Notification.php
│   │   ├── Task.php
│   │   ├── TaskAssignment.php
│   │   └── User.php
│   └── Services
│       ├── AnalyticsService.php
│       ├── ApprovalService.php
│       ├── AuthService.php
│       ├── DocumentService.php
│       ├── EmailService.php
│       ├── EventService.php
│       ├── GoogleOAuthService.php
│       ├── NotificationService.php
│       ├── PushNotificationService.php
│       ├── TaskService.php
│       └── UploadService.php
├── composer.json
├── database
│   ├── db_dump.sql
│   ├── migrations
│   │   ├── create_approvals.sql
│   │   ├── create_divisions.sql
│   │   ├── create_documents.sql
│   │   ├── create_events.sql
│   │   ├── create_tasks.sql
│   │   └── create_users.sql
│   └── seeds
│       ├── seed_divisions.sql
│       ├── seed_events.sql
│       ├── seed_tasks.sql
│       └── seed_users.sql
├── public
│   ├── assets
│   │   ├── css
│   │   ├── img
│   │   ├── js
│   │   └── vendor
│   ├── index.php
│   ├── sw.js
│   └── uploads
└── resources
    ├── components
    │   ├── chart_cards.php
    │   ├── navbar.php
    │   └── sidebar.php
    └── views
        ├── approvals
        │   └── index.php
        ├── auth
        │   ├── google_callback.php
        │   └── login.php
        ├── dashboard
        │   └── index.php
        ├── documents
        │   └── index.php
        ├── events
        │   ├── create.php
        │   ├── detail.php
        │   ├── edit.php
        │   └── index.php
        ├── layouts
        │   ├── auth.php
        │   └── main.php
        ├── notifications
        │   └── index.php
        └── tasks
            ├── board.php
            └── create.php

31 directories, 79 files
irmabelle@irmas-MacBook-Pro Final_Project % 