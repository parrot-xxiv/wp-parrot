# WP Parrot

Bedrock boilerplate to create Wordpress instance for local development .

### Requirement
- Running Local site

### Installation
- `git clone` to `your-site-folder/app/`
- update `.env` credentials similar in `Local Site -> Database` tab
- replace   
    - from `root   "{{root}}";`
    - to `root   "path-to-your-site/app/this-repo/web";`
- delete `public` directory (optional)
- restart local instance

