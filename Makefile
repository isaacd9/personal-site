default: index.html
	wkhtmltopdf -B 10 -L 10 -R 10 -T 10 -s letter index.html "build/Isaac Diamond Resume.pdf"

ship:
	rsync -P "build/Isaac Diamond Resume.pdf" "app@104.131.158.138:/home/app/site/resume.pdf"

