##   ¿Cuál es la lógica de negocio de un programa?
La lógica de negocio en un programa es el conjunto de reglas, procesos y cálculos
que definen cómo funciona una aplicación para cumplir con los objetivos
específicos de la organización o del sistema que representa. En otras palabras, es
el "cerebro" del programa que toma las decisiones importantes y conecta las
funciones técnicas con las necesidades del negocio.
Por ejemplo:
• En un sistema de ventas, la lógica de negocio podría incluir cómo calcular
descuentos, aplicar impuestos, verificar la disponibilidad de productos y
procesar pagos.

• En una aplicación de inventarios, sería la parte encargada de definir cuándo
se deben reordenar productos o cómo manejar los niveles de stock.

La lógica de negocio generalmente está separada de la interfaz de usuario y de la
base de datos, y se implementa mediante funciones, clases o módulos específicos
que trabajan con las reglas del negocio.

## ¿Por qué la conexión a BD forma parte del modelo en POO?
La conexión a la base de datos es parte del modelo en POO porque el modelo se
encarga de manejar los datos de la aplicación. Esta conexión permite que el
modelo realice consultas, guarde información y aplique reglas de negocio,
manteniendo una estructura organizada y separando responsabilidades de otras
partes como la interfaz de usuario o el controlador.

## ¿Qué es el CRUD?
El CRUD es un acrónimo que representa las cuatro operaciones básicas que se
pueden realizar en una base de datos o en un sistema de gestión de información:
Create, Read, Update y Delete (Crear, Leer, Actualizar y Eliminar).
• Create (Crear): Permite agregar nuevos registros o datos a la base de
datos. Por ejemplo, crear un nuevo usuario en el sistema.
• Read (Leer): Recupera datos almacenados en la base de datos para
mostrarlos o utilizarlos. Como consultar la lista de usuarios.
• Update (Actualizar): Modifica datos existentes en la base de datos. Por
ejemplo, cambiar el correo electrónico de un usuario.
• Delete (Eliminar): Borra datos de la base de datos. Como eliminar un
registro de usuario.
Estas operaciones son esenciales para manejar cualquier sistema basado en
datos y suelen implementarse en las aplicaciones mediante interfaces de usuario o
funciones del backend.

## ¿Por qué la función DELETE del CRUD no debe estar operativa en un
sistema?
La función Delete de un CRUD no siempre debe estar operativa en un sistema
porque eliminar datos directamente puede traer varios riesgos y problemas.
Algunas razones por las que se desactiva o se reemplaza por otro método son:
1. Pérdida Irreversible de Datos: Si un usuario elimina un registro
accidentalmente, puede ser difícil o imposible recuperarlo.
2. Integridad Referencial: En bases de datos relacionales, borrar un registro
puede afectar otros datos relacionados, causando errores o inconsistencias.
3. Historial y Auditoría: En muchos sistemas, es importante mantener un
registro de los cambios realizados. En lugar de eliminar un dato, se usa un
estado de "inactivo" o soft delete (marcar como eliminado sin borrarlo
físicamente).
4. Seguridad: Evitar la eliminación directa reduce el riesgo de manipulación
malintencionada o errores humanos graves.
Por estas razones, en lugar de eliminar datos de forma definitiva, muchos
sistemas optan por desactivarlos o mantenerlos con una marca de eliminación en
la base de datos.

## ¿Qué es soft delete?
El soft delete es una técnica utilizada en bases de datos donde, en lugar de
eliminar físicamente un registro, simplemente se marca como eliminado. Esto
permite que los datos permanezcan en la base de datos y puedan ser recuperados
si es necesario.

## ¿Qué es parsear en programación?
En programación, parsear (o hacer parsing) es el proceso de analizar y convertir
una cadena de texto o datos en una estructura más manejable para el programa,
como un objeto, una lista o un árbol sintáctico.
¿Cuándo se usa el parsing?
• Convertir datos: Interpretar una fecha escrita como y transformarla en un
objeto.
• Procesar archivos: Leer y analizar un archivo JSON, XML o CSV para
extraer información.
• Compiladores e intérpretes: Analizar código fuente y convertirlo en
instrucciones entendibles por la máquina.
• Extraer valores de texto: Tomar una cadena y dividir los datos en variables.

## Qué son las cookies?
En programación web, las cookies son pequeños archivos de texto que los sitios
web almacenan en el navegador del usuario. Se utilizan para guardar información
y mejorar la experiencia del usuario.
• ¿Para qué sirven?
• Autenticación: Mantienen la sesión iniciada sin necesidad de que el usuario
vuelva a ingresar sus credenciales.
• Preferencias: Guardan configuraciones como idioma o temas visuales.
• Seguimiento: Registran actividad del usuario en la web para análisis o
publicidad personalizada.
• Carrito de compras: Permiten almacenar productos seleccionados sin
perderlos al navegar entre páginas.

## Modelo-vista-controlador (MVC):
El Modelo-Vista-Controlador (MVC) es un patrón de diseño de software que
organiza una aplicación en tres componentes separados para mejorar la estructura
y la mantenibilidad del código. Aquí tienes un resumen de cada parte:
1. Modelo (Model)
➢ Representa los datos y la lógica de negocio de la aplicación.
➢ Se encarga de manejar la base de datos y las reglas de negocio.
➢ Ejemplo: Una clase `Usuario` que obtiene, guarda y modifica datos en la
base de datos.
2. Vista (View)
➢ Es la parte de la aplicación que muestra la información al usuario.
➢ Solo se encarga de la presentación, sin manipular la lógica de negocio.
➢ Ejemplo: Un archivo HTML que muestra una lista de usuarios.
3. Controlador (Controller)
➢ Actúa como intermediario entre el modelo y la vista.
➢ Recibe las solicitudes del usuario, consulta el modelo y actualiza la vista.
➢ Ejemplo: Un archivo `UsuarioController.php` que responde a una petición
de mostrar usuarios.

## ¿Cómo funciona en la práctica?
Cuando un usuario interactúa con la aplicación:
1. La Vista envía la solicitud al Controlador (ej., el usuario hace clic en "Ver perfil").
2. El Controlador consulta el Modelo para obtener la información.
3. El Modelo responde con los datos y el Controlador los envía a la Vista, que los
muestra al usuario.
Este patrón permite separar responsabilidades, mejorar la organización del código
y facilitar la escalabilidad de la aplicación.
Arquitectura de programación.
La arquitectura de programación se refiere a la estructura y organización de un
software, estableciendo cómo se diseñan sus componentes y cómo interactúan
entre sí. Existen varios enfoques y patrones arquitectónicos, dependiendo de la
complejidad y necesidades de un sistema. Aquí están algunos de los más usados:
Arquitecturas comunes en desarrollo de software
1. Monolítica
o Todo el sistema está integrado en una única aplicación.
o Más simple, pero menos escalable.
o Ejemplo: Aplicaciones web tradicionales con backend y frontend
juntos.
2. Cliente-Servidor
o Divide el sistema en dos partes: un cliente (que solicita datos) y un
servidor (que los provee).
o Ejemplo: Aplicaciones web donde el navegador es el cliente y el
backend es el servidor.
3. Arquitectura en Capas
o Organiza el sistema en niveles (Presentación, Lógica de Negocio,
Persistencia).
o Facilita la modularidad y escalabilidad.
o Ejemplo: Aplicaciones que siguen el patrón MVC.
4. Microservicios
o Divide la aplicación en pequeños servicios independientes que
interactúan entre sí.
o Mejora la escalabilidad y mantenimiento.
o Ejemplo: Sistemas como Netflix, que tienen múltiples servicios
independientes.
5. Orientada a Eventos
o Basada en la comunicación asíncrona entre componentes mediante
eventos.
o Ideal para sistemas en tiempo real.
o Ejemplo: Aplicaciones de mensajería como WhatsApp.
6. Serverless
o Funciones ejecutadas en la nube sin administrar servidores
manualmente.
o Escalabilidad automática y reducción de costos operativos.
o Ejemplo: AWS Lambda.

## ¿Qué representan las carpetas en un sistema?
En un sistema operativo o en un sistema de archivos, las carpetas representan
contenedores organizativos que agrupan archivos y otras carpetas dentro de una
estructura jerárquica. Su función principal es mantener los datos organizados,
facilitando la navegación y gestión de archivos en un sistema.

## ¿Qué representan las carpetas?
1. Organización de datos: Permiten clasificar archivos por tipo, uso o
contexto. Ejemplo: una carpeta "Documentos" puede contener archivos de
texto, PDFs y hojas de cálculo.
2. Jerarquía estructurada: Un sistema de archivos usa carpetas para definir
niveles de almacenamiento, con subcarpetas dentro de otras carpetas.
3. Separación de funcionalidades: En desarrollo de software, las carpetas
organizan código y recursos. Ejemplo: en un proyecto MVC, puedes tener
carpetas como models, views y controllers.
4. Gestión de permisos: En sistemas operativos, las carpetas pueden tener
reglas de acceso, permitiendo o restringiendo el uso según el usuario.
5. Referencias y rutas: Los archivos dentro de las carpetas tienen una ruta
que indica su ubicación dentro del sistema
(C:/Usuarios/Maria/Proyecto/index.php).
Ejemplo de estructura común:
Proyecto/
│── src/
│ ├── controllers/
│ ├── models/
│ ├── views/
│── assets/
│ ├── css/
│ ├── js/
│── index.php

## ¿Qué es un framework?
Un framework es un conjunto de herramientas, bibliotecas y reglas que
proporciona una estructura base para desarrollar software de manera más
eficiente y organizada. En lugar de comenzar un proyecto desde cero, un
framework ofrece funcionalidades predefinidas que facilitan el desarrollo.
## Características de un framework
• Estructura organizada: Define cómo debe estructurarse el código para
mantenerlo modular y escalable.
• Código reutilizable: Incluye funciones y componentes listos para usar,
evitando escribir código repetitivo.
• Optimización del desarrollo: Facilita tareas comunes como la gestión de
bases de datos, seguridad y validaciones.
• Mejores prácticas: Impone patrones de diseño como MVC, asegurando
una arquitectura limpia y mantenible.
Ejemplos de frameworks populares
• Web: Laravel (PHP), Django (Python), React.js (JavaScript)
• Móviles: Flutter (Dart), SwiftUI (Swift)
• Videojuegos: Unity (C#), Unreal Engine (C++)
• Backend: Spring Boot (Java), Express.js (Node.js)
Usar un framework reduce el tiempo de desarrollo, mejora la seguridad y facilita
la escalabilidad de los proyectos.

## ¿Por qué los frameworks incluyen la función DELETE si la misma no es aplicable?
Los frameworks incluyen la función Delete en el CRUD porque en algunos casos
sí es necesaria, como cuando los datos no requieren conservación, no tienen
dependencias o por regulaciones legales. Sin embargo, en muchos sistemas se
reemplaza con soft delete, que marca un registro como eliminado sin borrarlo
físicamente, evitando pérdida de datos y manteniendo la integridad del sistema.
 
# ¿Qué es un dashboard?
Un dashboard en programación es una interfaz visual que muestra datos
importantes de manera organizada y accesible. Se usa para monitorear
información en tiempo real, analizar métricas y facilitar la toma de decisiones.
Ejemplo sencillo: en un sistema de gestión de ventas, un dashboard podría
mostrar gráficos con ingresos, número de clientes y productos más vendidos en un
solo lugar.
Básicamente, es como un panel de control digital que reúne información clave
para que el usuario la entienda fácilmente.

## Palabras mágicas.
En programación, las "palabras mágicas" suelen referirse a términos o valores
especiales que tienen un significado importante dentro de un lenguaje o sistema,
pero que no siempre están documentados explícitamente. Se usan en diferentes
contextos, y aquí hay algunas formas en que aparecen:
## Tipos de "palabras mágicas" en programación
1. Palabras clave del lenguaje
Son términos reservados que el lenguaje de programación reconoce y usa
para estructurar el código.
Ejemplo en Java: public, static, final, extends.
2. Valores constantes especiales
Son valores que tienen un propósito único en un sistema o lenguaje, y no
deben cambiar.
Ejemplo en C: NULL (indica que un puntero no tiene dirección asignada).
3. Strings mágicos
Son cadenas de texto utilizadas para activar un comportamiento específico
en una aplicación o sistema.
Ejemplo: "admin" como clave para desbloquear funciones ocultas en un
software.
4. Números mágicos
Son valores numéricos que aparecen en el código sin explicación clara, lo
que puede dificultar el mantenimiento. Se recomienda reemplazarlos con
constantes con nombres descriptivos.
Ejemplo problemático:
5. velocidad = distancia / 3.6; // ¿Por qué 3.6? Mejor usar una constante
`FACTOR_KMH`

## ¿Por qué evitar palabras mágicas en código?
Dificultan la comprensión: Si alguien más lee el código, no siempre entenderá
qué significan.
Complican la modificación: Si el valor debe cambiar en el futuro, es mejor usar
constantes con nombres claros.
Solución: Usar variables o constantes bien nombradas en lugar de valores
ambiguos.

## Depuración de la base de datos.
La depuración de una base de datos es el proceso de identificar, corregir o
eliminar datos erróneos, duplicados o innecesarios para garantizar que la
información sea precisa, consistente y útil. Este proceso es esencial para
mantener la calidad de los datos y optimizar el rendimiento del sistema.
• Pasos comunes en la depuración:
• Revisión de datos: Identificar errores, duplicados o inconsistencias.
• Corrección o eliminación: Editar datos incorrectos o eliminarlos si no son
necesarios.
• Estandarización: Asegurar que los datos sigan un formato uniforme.
• Validación: Comprobar que los datos depurados cumplen con los requisitos
del sistema.
## ¿Cuándo depurar una base de datos?
La depuración de una base de datos es recomendable en los siguientes casos:
1. Datos obsoletos: Cuando la base de datos contiene información antigua
que ya no es relevante o útil, como registros de usuarios inactivos durante
años.
2. Duplicados: Cuando detectas múltiples copias de los mismos datos, lo que
podría causar inconsistencias y ocupar espacio innecesario.
3. Errores en datos: Si existen registros mal ingresados, incompletos o con
valores incorrectos que pueden afectar las operaciones o análisis.
4. Migraciones: Antes o después de migrar datos a otro sistema, es esencial
asegurarse de que la información sea precisa y limpia.
5. Optimización de rendimiento: Si la base de datos está creciendo
demasiado y afectando el rendimiento del sistema, eliminar datos
innecesarios ayuda a agilizar consultas y procesos.
6. Revisiones periódicas: Establecer depuración como parte de un
mantenimiento regular para evitar acumulación de problemas y garantizar la
calidad de los datos.
## ¿En qué tipo de entorno programable los datos pueden ser borrados?
Los datos pueden ser borrados en prácticamente cualquier entorno programable
que tenga acceso a sistemas de almacenamiento, siempre y cuando se
implemente la lógica necesaria para ello. Aquí tienes algunos ejemplos:
Entornos comunes donde los datos pueden ser borrados:
1. Bases de datos relacionales (SQL):
o Lenguajes como SQL permiten ejecutar comandos como DELETE,
aunque también puedes implementar soft delete.
o Ejemplo: PostgreSQL, MySQL, SQL Server.
2. Sistemas NoSQL:
o En bases de datos como MongoDB o Firebase, puedes eliminar
documentos o registros con métodos como deleteOne() o remove().
o Ejemplo: MongoDB, Cassandra, DynamoDB.
3. Programación backend:
o Entornos como Node.js, Python o PHP permiten integrar lógica para
eliminar archivos, registros o datos persistentes.
o Ejemplo: Borrar información de un servidor o archivo JSON.
4. Aplicaciones móviles:
o Entornos como Android o iOS permiten eliminar datos almacenados
localmente o en servicios de backend.
o Ejemplo: Borrar datos almacenados en SQLite o Realm.
5. Cloud computing:
o Servicios en la nube como AWS, Azure o Google Cloud permiten
borrar datos de bases de datos, almacenamiento de blobs o servicios
específicos.
o Ejemplo: Eliminar archivos en S3 o registros en una base de datos
administrada.
6. Sistemas operativos:
o Scripts y programas pueden interactuar con el sistema de archivos
para eliminar datos almacenados localmente.
o Ejemplo: Borrar archivos mediante Python (os.remove()).
En cada caso, el proceso de eliminación debe ajustarse a las necesidades del
sistema (soft delete, eliminación física, auditoría, etc.). 

## ¿Cuándo es necesario borrar datos vitales en un programa?
Eliminar datos vitales de un programa es algo que debe hacerse con extrema
precaución y solo en situaciones específicas donde sea absolutamente necesario.
Aquí algunos casos comunes:
1. Cumplimiento legal o regulatorio: Cuando leyes como el RGPD exigen la
eliminación de datos sensibles de un usuario, especialmente si el usuario
ejerce su "derecho al olvido".
2. Seguridad y privacidad: Si los datos vitales han sido comprometidos debido
a una brecha de seguridad o contienen información que puede poner en
riesgo a las personas.
3. Obsolescencia de datos: Cuando los datos ya no son útiles para el
propósito del programa y mantenerlos solo ocupa espacio o afecta el
rendimiento.
4. Errores críticos: En casos donde los datos están corruptos o incorrectos, y
mantenerlos podría causar fallos graves en el sistema.
5. Migraciones o reestructuraciones: Si un sistema está siendo migrado a otro
entorno y ciertos datos ya no son necesarios.
6. Peticiones explícitas: Si un cliente o usuario solicita que se eliminen sus
datos personales del programa.
7. Optimización de rendimiento: Cuando se necesita liberar espacio o reducir
la sobrecarga de la base de datos para mejorar su desempeño.
Es esencial tener una política de respaldo adecuada antes de eliminar datos
vitales para evitar pérdidas irreversibles.
## ¿Qué es codificación?
La codificación es el proceso de escribir instrucciones utilizando un lenguaje de
programación para que una computadora realice tareas específicas. Es decir, es
como darle "órdenes" a una máquina en un idioma que pueda entender, como
Python, Java, PHP, entre otros.
## ¿Qué implica codificar?
1. Escribir código: Usar sintaxis y reglas de un lenguaje de programación
para crear programas o aplicaciones.
2. Resolver problemas: Traducir soluciones a problemas en pasos que la
computadora puede ejecutar.
3. Interacción máquina-humano: Actúa como puente entre ideas humanas y
la ejecución por parte de sistemas computacionales.