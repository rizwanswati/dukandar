echo "Artisan model generator"
echo "Created by Loupeznik (https://github.com/Loupeznik)"

if (!(Test-Path ".\artisan" -PathType Leaf)) {
    Write-Host "ERROR: Artisan not found in this directory" -ForegroundColor red
    Write-Host "Exiting" -ForegroundColor red
    exit
}

$input = Read-Host -Prompt "Enter model names separated by commas"

if (!$input) {
    Write-Host "ERROR: No model names entered" -ForegroundColor red
    Write-Host "Exiting" -ForegroundColor red
    exit
}

$input = $input -replace '\s',''

echo $input

$controller = $input.Split(",")

foreach ($cont in $controller) {
    Write-Host "Creating controller $cont" -ForegroundColor green
    php artisan make:controller $cont
}
