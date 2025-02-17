<!DOCTYPE html>
<html lang="fr">
<body>
    <?php include('structure.php'); ?>
    
    <main>
    <form action="page2.php" method="post" id="form">
        <input type="hidden" name="page" value="1">
    <h1 id="titlepage">QCM Noté : les Types</h1>
    <div class="question">
        <div class="info">
            <h3>Question 1</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Choisissez les noms des types de bases du langage Python :</p>
                <ul>
                    <li>
                        <select id="p1_q1_1" name="p1_q1_1">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        <label for="p1_q1_1">: pour représenter les entiers relatifs</label>
                    </li>
                    <li>
                        <select id="p1_q1_2" name="p1_q1_2">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        <label for="p1_q1_2">: pour représenter les réels</label>
                    </li>
                    <li>
                        <select id="p1_q1_3" name="p1_q1_3">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        <label for="p1_q1_3">: pour représenter les booléens</label>
                    </li>
                    <li>
                        <select id="p1_q1_4" name="p1_q1_4">
                            <option value=""></option>
                            <option value="float">float</option>
                            <option value="int">int</option>
                            <option value="str">str</option>
                            <option value="bool">bool</option>
                        </select>
                        <label for="p1_q1_4">: pour représenter les chaînes de caractères</label>
                    </li>
                </ul>
        </div>
    </div>
    
    <div class="question">
        <div class="info">
            <h3>Question 2</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit la variable ci-après :</p>
            <code>res = "toto"</code>
            <label for="p1_q2">Quel est le type de la variable res ?</label>
            <select id="p1_q2" name="p1_q2">
                <option value=""></option><option value="float">float</option>
                <option value="int">int</option><option value="str">str</option>
                <option value="bool">bool</option><option value="set">set</option>
                <option value="dict">dict</option>
            </select>
        </div>
    </div>
    <div class="question">
        <div class="info">
            <h3>Question 3</h3>
            <p>Noté sur 1,00</p>
        </div>
        <div class="content">
            <p>Soit la variable ci-après :</p>
            <code>res = 47.5</code>
            <label for="p1_q3">Quel est le type de la variable res ?</label>
            <select id="p1_q3" name="p1_q3">
                <option value=""></option><option value="float">float</option>
                <option value="int">int</option><option value="str">str</option>
                <option value="bool">bool</option><option value="set">set</option>
                <option value="dict">dict</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Valider" id="button_valider_page" onclick="valider()">
    </form>
    </main>
</body>
</html>