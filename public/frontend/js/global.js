class ElementCollection extends Array
{
    /**
     * Handle event ready of element
     * @param {function} cb callback
     */
    ready(cb)
    {
        const isReady = this.some(e =>
        {
            return e.readyState != null & e.readyState != 'loading';
        });
        if (isReady)
        {
            cb();
        } else
        {
            this.on('DOMContentLoaded', cb);
        }
        return this;
    }

    /**
     * Handle add event of element
     * @param {String} event name event
     * @param {string} cbOrSelector name event
     * @param {Function} cb callback
     */
    on(event, cbOrSelector, cb)
    {
        if (typeof cbOrSelector === 'function')
        {
            this.forEach(e => e.addEventListener(event, cb));
        } else
        {
            this.forEach(elem =>
            {
                elem.addEventListener(event, e =>
                {
                    // kiểm tra phần tử có phải bộ chọn không
                    if (e.target.matches(cbOrSelector)) cb(e);
                });
            });
        }
        return this;
    }

    next()
    {
        return this.map(e => e.nextElementSibling).filter(e => e != null);
    }

    prev()
    {
        return this.map(e => e.previousElementSibling).filter(e => e != null);
    }

    removeClass(className)
    {
        this.forEach(e => e.classList.remove(className));
        return this;
    }

    addClass(className)
    {
        this.forEach(e => e.classList.add(className));
        return this;
    }

    css(property, value)
    {
        const camelProp = property.replace(/(-[a-z])/, g =>
        {
            return g.repalce('-', '').toUpperCase();
        });
        this.forEach(e => (e.style[camelProp] = value));
        return this;
    }
}
class AjaxPromise
{
    constructor(promise)
    {
        this.promise = promise;
    }

    done(cb)
    {
        this.promise = this.promise.then(data =>
        {
            cb(data);
            return data;
        });
        return this;
    }

    fail(cb)
    {
        this.promise = this.promise.catch(cb);
        return this;
    }

    always(cb)
    {
        this.promise = this.promise.finally(cb);
        return this;
    }
}

function $(param)
{
    if (typeof param === 'string' || param instanceof String)
    {
        return new ElementCollection(...document.querySelector(param));
    }
    return new ElementCollection(param);
}

$.fecthData = function ({ url, method, data = {}, success = () => { }, option = { headers: { "Content-type": "application/json; charset=utf-8" } } })
{
    return new AjaxPromise(
        fetch(
            `${url}`,
            {
                method: method,
                ...option,
                body: JSON.stringify(data),
            }
        ).then(res =>
        {
            if (res.ok)
            {
                return res.json();
            } else
            {
                throw new Error(res.status);
            }
        }).then(data =>
        {
            success(data)
            return data;
        })
    )
}

$.get = function ({ url, data = {}, success = () => { }, option = { headers: { "Content-type": "application/json; charset=utf-8" } } })
{
    //Object.entries(obj) trả về mảng có các phần tử là mảng với các cặp thuôc tính chuổi với khóa đệm riêng
    const queryString = Object.entries(data).map(([key, value]) =>
    {
        return `${key}=${value}`;
    }).join('&');

    return new AjaxPromise(
        fetch(
            `${url}?${queryString}`,
            {
                method: 'GET',
                ...option
            }
        ).then(res =>
        {
            if (res.ok)
            {
                console.log(res);
                return res.json();
            } else
            {
                throw new Error(res.status);
            }
        }).then(data =>
        {
            success(data)
            return data;
        })
    )
};


