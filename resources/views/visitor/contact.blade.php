<section id="contact">
        <div class="container2">
            <div class="line_title"></div>
            <h1 class="title">CONTACTO</h1>            
            
            <div class="flex">
                <div>

                    <form class="mailForm" onsubmit="return enviar()">
                            {{ csrf_field() }}
                        <input placeholder="Nombre" type="text" name="name" required>
                        <input placeholder="Correo" type="email" name="email" required>
                        <input placeholder="Telefono" type="phone" name="phone" required>
                        <textarea rows="5" required placeholder="Escribe tu mensaje" id="message_"></textarea>
                        <button class="btn">Enviar</button>
                    </form>

                </div>

                <div>
                    <h5>Estamos encantado de atenderte</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ad itaque sed eligendi praesentium, assumenda placeat </p>
                    <p>
                        <a href="">correo@madproducciones.com</a><br>
                        <a href="">961-123-4567</a>
                    </p>
                </div>

            </div>
    
</section>