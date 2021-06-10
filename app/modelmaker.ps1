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

$models = $input.Split(",")

foreach ($model in $models) {
    Write-Host "Creating controller $model" -ForegroundColor green
    php artisan make:model $model
}
