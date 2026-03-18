#!/bin/bash
# scripts/create-example-files.sh

COMPTEUR_DIR="actions/compteur"

echo "Génération des fichiers .example..."

# Fichiers *R.txt (records) — structure à 3 lignes
for file in "$COMPTEUR_DIR"/*R.txt; do
  example="${file}.example"
  cat > "$example" << 'EOF'
record:
moyenne:
reussites:0
EOF
  echo "  ✓ $example"
done

# Fichiers *I.txt (impressions) — un simple entier
for file in "$COMPTEUR_DIR"/*I.txt; do
  example="${file}.example"
  echo "0" > "$example"
  echo "  ✓ $example"
done

# Fichiers spéciaux
echo "0" > "$COMPTEUR_DIR/compteur.txt.example"
echo "  ✓ $COMPTEUR_DIR/compteur.txt.example"

# compteurLive.txt — structure timestamp + IP
cat > "$COMPTEUR_DIR/compteurLive.txt.example" << 'EOF'
0
127.0.0.1
EOF
echo "  ✓ $COMPTEUR_DIR/compteurLive.txt.example"

echo ""
echo "Terminé. $(ls $COMPTEUR_DIR/*.example | wc -l) fichiers .example créés."
echo "Vérifiez que *.txt est bien dans .gitignore avant de commiter."